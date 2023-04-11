<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz List</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Add jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Quizzes</h1>
        <a href="{{ route('quizzes.create') }}" class="btn btn-primary mb-3">Create Quiz</a>
        <div class="list-group">
            @foreach($quizzes as $quiz)
                <a href="{{ route('quizzes.show', $quiz) }}" class="list-group-item list-group-item-action">{{ $quiz->name }}</a>
            @endforeach
        </div>
    </div>
</body>
</html>

