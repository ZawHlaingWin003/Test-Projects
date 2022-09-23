<?php

use App\Models\Comment;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('dashboard');
Route::view('/team', 'welcome')->name('team');
Route::view('/projects', 'welcome')->name('projects');

Route::get('/comments/', function () {
    return view('comments.index', ['comments' => Comment::all()]);
});
Route::get('/comments/create', function () {
    return view('comments.create');
});

Route::post('/comments/store', function () {
    Comment::create(
        request()->validate(['body' => 'required|string'])
    );

    return redirect('/comments');
});
Route::get('/comments/{comment}/edit', function (Comment $comment) {
    return view('comments.edit', ['comment' => $comment]);
});

Route::patch('/comments/{comment}/update', function (Comment $comment) {
    $comment->update(
        request()->validate(['body' => 'required|string'])
    );

    return redirect("/comments/{$comment->id}/edit");
});

Route::delete('/comments/{comment}/delete', function (Comment $comment) {
    $comment->delete();
    return back();
})->name('comments.delete');
