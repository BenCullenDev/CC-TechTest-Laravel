<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz List</title>
</head>
<body>
    <h1>Quizzes</h1>
    <a href="{{ route('quizzes.create') }}">Create Quiz</a>
    <ul>
        @foreach($quizzes as $quiz)
            <li>
                <a href="{{ route('quizzes.show', $quiz) }}">{{ $quiz->name }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
