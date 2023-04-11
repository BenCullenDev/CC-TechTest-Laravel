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
        <ol class="list-group mb-4">
            @foreach($quiz->questions as $question)
                <li class="list-group-item">{{ $question->content }} (Answer: {{ $question->answer ? 'Yes' : 'No' }})</li>
            @endforeach
        </ol>
        <div class="d-flex">
            <a href="{{ route('quizzes.index') }}" class="btn btn-secondary">Back to Quizzes</a>
            <a href="{{ route('quizzes.edit', $quiz) }}" class="btn btn-warning ml-2">Edit Quiz</a>
            <form action="{{ route('quizzes.destroy', $quiz) }}" method="POST" class="ml-2" onsubmit="return confirm('Are you sure you want to delete this quiz?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete Quiz</button>
            </form>
        </div>
    </div>
</body>
</html>
