<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Quiz</title>
</head>
<body>
    <h1>Create Quiz</h1>
    <form action="{{ route('quizzes.store') }}" method="POST">
        @csrf
        <label for="name">Quiz Name:</label>
        <input type="text" name="name" id="name">
        <br>
        @for($i = 1; $i <= 3; $i++)
            <label for="question{{ $i }}_content">Question {{ $i }}:</label>
            <input type="text" name="question{{ $i }}_content" id="question{{ $i }}_content">
            <br>
            <label for="question{{ $i }}_answer">Answer (yes/no):</label>
            <input type="text" name="question{{ $i }}_answer" id="question{{ $i }}_answer">
            <br>
        @endfor
        <button type="submit">Create Quiz</button>
    </form>
</body>
</html>

