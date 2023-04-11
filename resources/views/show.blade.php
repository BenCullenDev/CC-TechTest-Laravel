<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Quiz</title>
</head>
<body>
    <h1>{{ $quiz->name }}</h1>
    <ol>
        @foreach($quiz->questions as $question)
            <li>{{ $question->content }} (Answer: {{ $question->answer ? 'Yes' : 'No' }})</li>
        @endforeach
    </ol>
    <a href="{{ route('quizzes.index') }}">Back to Quizzes</a>
</body>
</html>
