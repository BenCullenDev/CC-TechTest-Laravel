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
           <!-- ... -->
@foreach(range(1, 3) as $i)
    <div class="form-group">
        <label for="question{{ $i }}_content">Question {{ $i }}:</label>
        <input type="text" name="question{{ $i }}_content" id="question{{ $i }}_content" class="form-control" required>
        <div class="mt-2">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="question{{ $i }}_answer" id="question{{ $i }}_answer_yes" value="yes" required>
                <label class="form-check-label" for="question{{ $i }}_answer_yes">Yes</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="question{{ $i }}_answer" id="question{{ $i }}_answer_no" value="no">
                <label class="form-check-label" for="question{{ $i }}_answer_no">No</label>
            </div>
        </div>
    </div>
@endforeach
<!-- ... -->

            <button type="submit" class="btn btn-primary">Create Quiz</button>
        </form>
    </div>
</body>

</html>

