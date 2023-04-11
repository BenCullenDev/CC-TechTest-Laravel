<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Add jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Create Quiz</title>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Create Quiz</h1>
        <form action="{{ route('quizzes.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Quiz Name:</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            @for($i = 1; $i <= 3; $i++)
                <div class="form-group">
                    <label for="question{{ $i }}_content">Question {{ $i }}:</label>
                    <input type="text" name="question{{ $i }}_content" id="question{{ $i }}_content" class="form-control">
                </div>
                <div class="form-group">
                    <label for="question{{ $i }}_answer">Answer (yes/no):</label>
                    <input type="text" name="question{{ $i }}_answer" id="question{{ $i }}_answer" class="form-control">
                </div>
            @endfor
            <button type="submit" class="btn btn-primary">Create Quiz</button>
        </form>
    </div>
</body>

</html>

