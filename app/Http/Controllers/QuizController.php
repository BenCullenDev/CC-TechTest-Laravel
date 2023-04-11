<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;

class QuizController extends Controller
{
    public function index()
{
    $quizzes = Quiz::all();
    return view('index', compact('quizzes'));
}

public function create()
{
    return view('create');
}

public function store(Request $request)
{
    $quiz = Quiz::create($request->only('name'));

    $questions = [];
    for ($i = 1; $i <= 3; $i++) {
        $questions[] = [
            'content' => $request->input("question{$i}_content"),
            'answer' => $request->input("question{$i}_answer") === "yes",
        ];
    }

    $quiz->questions()->createMany($questions);

    return redirect()->route('quizzes.index');
}


public function show(Quiz $quiz)
{
    return view('show', compact('quiz'));
}

public function destroy(Quiz $quiz)
{
    $quiz->delete();
    return redirect()->route('quizzes.index');
}

public function edit(Quiz $quiz)
{
    return view('edit', compact('quiz'));
}

public function update(Request $request, Quiz $quiz)
{
    $quiz->update($request->only('name'));

    foreach ($quiz->questions as $index => $question) {
        $question->update([
            'content' => $request->input("question{$index}_content"),
            'answer' => $request->input("question{$index}_answer") == "yes",
        ]);
    }

    return redirect()->route('quizzes.show', $quiz);
}

public function take(Quiz $quiz)
{
    return view('take', compact('quiz'));
}

}
