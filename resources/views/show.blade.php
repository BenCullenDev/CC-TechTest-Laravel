<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Quiz</title>
    <!-- Add Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Add jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <h1 class="my-4">{{ $quiz->name }}</h1>
        <ol class="list-group mb-4">
            @foreach($quiz->questions as $question)
                <li class="list-group-item">{{ $question->content }} (Answer: {{ $question->answer ? 'Yes' : 'No' }})</li>
            @endforeach
        </ol>
        <a href="{{ route('quizzes.index') }}" class="btn btn-secondary">Back to Quizzes</a>
        <form action="{{ route('quizzes.destroy', $quiz) }}" method="POST" class="mt-3" onsubmit="return confirm('Are you sure you want to delete this quiz?')">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete Quiz</button>
</form>

    </div>
</body>

</html>
