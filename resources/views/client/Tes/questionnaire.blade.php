<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SRQ Test</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-100 flex items-center justify-center min-h-screen">

    <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-md">
        <h2 class="text-2xl font-bold text-center mb-4">SRQ Test</h2>
        
        <!-- Progress Bar -->
        <div class="w-full bg-gray-300 rounded-full h-2 mb-4">
            <div id="progress-bar" class="bg-blue-500 h-2 rounded-full" style="width: 0%;"></div>
        </div>

        <!-- Question Text -->
        <p id="question-text" class="text-lg text-center mb-6">Pertanyaan akan muncul di sini</p>
        
       <!-- Di dalam loop pertanyaan -->
<div class="flex flex-col items-center space-y-4">
    <button type="button" onclick="selectAnswer(3)" class="bg-[#a3e3d8] rounded-md text-white py-2 px-8 text-sm font-bold">Ya</button>
    <button type="button" onclick="selectAnswer(2)" class="bg-[#d1ecf1] rounded-md text-white py-2 px-8 text-sm font-bold">Kadang Kadang</button>
    <button type="button" onclick="selectAnswer(1)" class="bg-[#f8d7da] rounded-md text-white py-2 px-8 text-sm font-bold">Tidak Pernah</button>
</div>
        
        <!-- Navigation Buttons -->
        <div class="flex justify-between">
            <button onclick="prevQuestion()" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">⬅️</button>
            <button onclick="nextQuestion()" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">➡️</button>
        </div>
    </div>

    <script>

let answers = []; // Array untuk menyimpan poin jawaban

function selectAnswer(point) {
    answers.push(point); // Tambahkan poin ke array

    // Lanjut ke pertanyaan berikutnya atau simpan jawaban jika sudah pertanyaan terakhir
    // Contoh: jika ingin lanjut ke pertanyaan berikutnya, panggil fungsi di sini
}

function submitAnswers() {
    // Kirim answers ke server ketika semua pertanyaan sudah dijawab
    fetch("{{ route('questionnaire.store') }}", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
        },
        body: JSON.stringify({ answers: answers })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            window.location.href = "{{ route('questionnaire.result') }}";
        }
    });
}

        // Array pertanyaan dan jawaban
        const questions = [
            "Apakah Anda kehilangan nafsu makan?",
            "Apakah Anda merasa gelisah?", 
            /* Tambahkan hingga 40 pertanyaan */
        ];

        let currentQuestion = 0;
        const answers = new Array(questions.length).fill(null); // Simpan jawaban

        function loadQuestion() {
            document.getElementById("question-text").textContent = questions[currentQuestion];
            document.getElementById("progress-bar").style.width = `${((currentQuestion + 1) / questions.length) * 100}%`;
        }

        function selectAnswer(answer) {
            answers[currentQuestion] = answer;
        }

        function nextQuestion() {
            if (currentQuestion < questions.length - 1) {
                currentQuestion++;
                loadQuestion();
            }
        }

        function prevQuestion() {
            if (currentQuestion > 0) {
                currentQuestion--;
                loadQuestion();
            }
        }

        // Muat pertanyaan pertama
        loadQuestion();
    </script>

</body>
</html>
