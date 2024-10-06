<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('home');
});

Route::get('/home', function () {
    $image1 = asset('images/picture1.jpeg');
    $image2 = asset('images/picture2.jpg');
    $image3 = asset('images/picture3.jpg');

    $ig = 'https://www.instagram.com/justinbieber/';
    $linkedin = 'https://www.linkedin.com/in/jerome-polin-sijabat-b0241247/';
    $github = 'https://www.github.com/Marsella30/';

    $title = 'Home-12081';
    $atma = 'Atmarior';
    $home = 'Home';
    $profile = 'Profile';

    return view('home', [
        'image1' => $image1, 
        'image2' => $image2, 
        'image3' => $image3,
        'ig' => $ig,
        'linkedin' => $linkedin,
        'github' => $github,
        'title' => $title,
        'atma' => $atma,
        'home' => $home,
        'profile' => $profile
    ]);
});

Route::get('/profile', function () {
    $foto = asset('images/foto.jpg');
    $judul = 'Marsella Adinda Oktaviani - 220712081';
    $isi = 'Segala perkara dapat kutanggung di dalam Dia yang memberi kekuatan (Filipi 4:13).';

    return view('profile', [
        'foto' => $foto,
        'judul' => $judul,
        'isi' => $isi
    ]);
});
