<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Midtrans\Config;
use Midtrans\Snap;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function createSnapToken(Request $request)
    {
        // Konfigurasi Midtrans
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;

        // Buat parameter transaksi
        $params = [
            'transaction_details' => [
                'order_id' => $request->order_id,
                'gross_amount' => $request->amount, // Total pembayaran
            ],
            'customer_details' => [
                'first_name' => $request->name,
                'email' => $request->email,
            ],
        ];

        // Buat Snap Token
        $snapToken = Snap::getSnapToken($params);

        return response()->json(['snap_token' => $snapToken]);
    }

    public function createOrder(Request $request)
    {
        $order = Order::create([
            'order_id' => uniqid(),
            'name' => $request->name,
            'email' => $request->email,
            'amount' => $request->amount,
            'status' => 'UNPAID',
        ]);
        return response()->json(['order' => $order]);
    }
    
    public function notificationHandler(Request $request)
    {
        $payload = $request->getContent();
        $notification = json_decode($payload);

        $validSignatureKey = hash('sha512', $notification->order_id . $notification->status_code . $notification->gross_amount . config('midtrans.server_key'));

        if ($notification->signature_key != $validSignatureKey) {
            return response()->json(['message' => 'Invalid signature'], 403);
        }

        $order = Order::where('order_id', $notification->order_id)->first();

        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        if ($notification->transaction_status == "pending") {
            $order->status = 'PENDING';
        } elseif ($notification->transaction_status == "settlement" && $notification->status_code == "200"){
            $order->status = 'PAID';
        } elseif ($notification->transaction_status == "capture" && $notification->status_code == "200"){
            $order->status = 'PAID';
        } else {
            $order->status = 'CANCELLED';
        }

        $order->save();

        return response()->json(['message' => 'Success']);
    }
    
}