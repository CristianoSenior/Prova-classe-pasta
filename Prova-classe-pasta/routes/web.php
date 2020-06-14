<?php

Route::get('/', function () {

  $prova = "Test";
  $test = 'Ciao';
  $numeroIterazioni = 10;
    return view('welcome',compact('numeroIterazioni','prova','test'));
})
->name("welcome");

Route::get('/home20', function () {

  $prova = "Test";
  $test = 'Ciao';
  $numeroIterazioni = 20;
    return view('welcome',compact('numeroIterazioni','prova','test'));
})
->name('home20');

Route::get('/listaPasta', function () {
    $pastaGenerica = config('pasta');
    return view('listaPasta',compact("pastaGenerica"));
})
->name("pasta");

Route::get('/pastaLungaUrl', function () {
    $pastaGenerica = config('pasta');
    return view('listaPasta',compact("pastaGenerica"));
})
->name("pastaLungaLink");
