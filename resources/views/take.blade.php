<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take Quiz</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add Poppins font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">
    <!-- Apply Poppins font -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="my-4">{{ $quiz->name }}</h1>
        <form>
            @foreach($quiz->questions as $question)
                <div class="form-group">
                    <label>{{ $question->content }}</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="question{{ $question->id }}" id="question{{ $question->id }}_yes" value="yes">
                            <label class="form-check-label" for="question{{ $question->id }}_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="question{{ $question->id }}" id="question{{ $question->id }}_no" value="no">
                            <label class="form-check-label" for="question{{ $question->id }}_no">No</label>
                        </div>
                    </div>
                </div>
            @endforeach
            <button type="button" class="btn btn-primary" onclick="checkAnswers()">Submit Answers</button>
        </form>
    </div>

    <script>
function checkAnswers() {
    const questions = {!! $quiz->questions->toJson() !!};
    let correctAnswers = 0;

    questions.forEach((question) => {
        const userAnswer = document.querySelector(`input[name="question${question.id}"]:checked`).value === 'yes';
        if (userAnswer === !!question.answer) { // Convert the integer to boolean
            correctAnswers++;
        }
    });

    alert(`You answered ${correctAnswers} out of ${questions.length} questions correctly.`);
}
    </script>
</body>
</html>
