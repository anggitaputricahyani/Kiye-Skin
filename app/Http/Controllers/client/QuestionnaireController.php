<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    // Array pertanyaan
    private $questions = [
        "Apakah Anda kehilangan nafsu makan?",
        "Apakah Anda merasa gelisah?",
        // Tambahkan pertanyaan lain hingga total 40
    ];

    // Menampilkan halaman kuisioner dengan pertanyaan pertama
    public function show()
    {
        return view('client.Tes.questionnaire', [
            'questions' => $this->questions,
            'totalQuestions' => count($this->questions),
        ]);
    }

    // Menyimpan jawaban user
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'answers' => 'required|array|min:40', // Pastikan 40 jawaban
            'answers.*' => 'required|string|in:Ya,Tidak',
        ]);

        // Contoh: Simpan ke database (ganti ini dengan model yang sesuai)
        // QuestionnaireAnswer::create([
        //     'user_id' => auth()->id(),
        //     'answers' => json_encode($validatedData['answers']),
        // ]);

        return redirect()->route('questionnaire.result')->with('success', 'Jawaban berhasil disimpan!');
    }

    // Menampilkan hasil kuisioner
    public function result()
    {
        // Ambil hasil jawaban dari sesi atau database (contoh)
        $answers = session('answers'); // Atau dari database

        return view('questionnaire-result', [
            'answers' => $answers,
            // Tambahkan logika analisis hasil jika diperlukan
        ]);
    }
}
