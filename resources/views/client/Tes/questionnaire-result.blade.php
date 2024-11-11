<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Kuisioner</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-100 flex items-center justify-center min-h-screen">

    <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-lg">
        <h2 class="text-2xl font-bold text-center mb-4">Hasil Kuisioner Anda</h2>
        
        <!-- Pesan sukses jika ada -->
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tampilkan hasil jawaban -->
        <div class="mb-6">
            <h3 class="text-lg font-semibold mb-2">Jawaban Anda:</h3>
            <ul class="list-disc pl-5 space-y-2">
                @foreach($answers as $index => $answer)
                    <li class="text-gray-700">
                        Pertanyaan {{ $index + 1 }}: <strong>{{ $answer }}</strong>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Analisis atau rekomendasi (opsional) -->
        <div class="mb-6">
            <h3 class="text-lg font-semibold mb-2">Analisis Hasil:</h3>
            <p class="text-gray-700">
                <!-- Contoh logika analisis sederhana, sesuaikan dengan kebutuhan -->
                Berdasarkan jawaban Anda, berikut adalah saran atau analisis mengenai kondisi Anda:
            </p>
            <ul class="list-disc pl-5 mt-2">
                @php
                    // Logika analisis sederhana, misalnya hitung jumlah jawaban "Ya"
                    $totalYa = count(array_filter($answers, fn($answer) => $answer === 'Ya'));
                @endphp

                @if($totalYa > 20)
                    <li class="text-gray-700">Anda mungkin memiliki beberapa masalah kulit yang perlu diperhatikan. Pertimbangkan untuk berkonsultasi dengan spesialis.</li>
                @elseif($totalYa > 10)
                    <li class="text-gray-700">Kondisi kulit Anda cukup baik, namun ada beberapa area yang bisa ditingkatkan.</li>
                @else
                    <li class="text-gray-700">Kondisi kulit Anda dalam keadaan yang cukup baik.</li>
                @endif
            </ul>
        </div>

        <!-- Tombol kembali ke halaman utama atau kuisioner lagi -->
        <div class="flex justify-center">
            <a href="{{ route('questionnaire.show') }}" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Isi Kuisioner Lagi</a>
            <a href="/" class="ml-4 px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600">Kembali ke Beranda</a>
        </div>
    </div>

</body>
</html>
