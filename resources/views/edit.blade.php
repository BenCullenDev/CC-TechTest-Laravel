<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Quiz</title>
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
        <h1 class="my-4">Edit Quiz</h1>
        <form action="{{ route('quizzes.update', $quiz) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="name">Quiz Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $quiz->name }}">
            </div>
            @foreach($quiz->questions as $index => $question)
                <div class="form-group">
                    <label for="question{{ $index }}_content">Question {{ $index + 1 }}:</label>
                    <input type="text" name="question{{ $index }}_content" id="question{{ $index }}_content" class="form-control" value="{{ $question->content }}">
                </div>
                <div class="form-group">
                    <label for="question{{ $index }}_answer">Answer (yes/no):</label>
                    <input type="text" name="question{{ $index }}_answer" id="question{{ $index }}_answer" class="form-control" value="{{ $question->answer ? 'yes' : 'no' }}">
                </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Update Quiz</button>
        </form>
    </div>
</body>
</html>


