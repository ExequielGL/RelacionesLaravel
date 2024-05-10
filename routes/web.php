<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Adress;
use App\Models\Comment;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba-address', function () {
    //probamos la relacion de uno a uno teniendo user
    // $user = User::find(1);
    // return $user->adress;

    //probamos la relacion de uno a uno inversa teniendo address
    // $address = Adress::find(1);
    // return $address->user;
});

Route::get('prueba-comments', function () {
    //probamos la relacion de uno a muchos
    // $post = Post::find(1);
    // return $post->comments;

    //probamos la relacion de uno a muchos inversa
    $comment = Comment::find(1);
    return $comment->post;
});

Route::get('prueba-tags', function () {
    //probamos la relacion de muchos a muchos
    // $post = Post::find(1);
    // $post->tags()->attach([1, 2]); //detach(1) para eliminar, sync([1, 2]) para sincronizar
    // return "Etiquetas asignadas";

    $post = Post::find(1);
    return $post->tags;
});
