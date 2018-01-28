<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/about', function () {
    return view('aboutus/about');
});


// ugandans

// daniel Egonyu 
Route::get('/daniel', function () {
    return view('countries/uganda/daniels/daniel');
});

Route::get('/aboutdaniel', function () {
    return view('countries/uganda/daniels/aboutdaniel');
});

Route::get('/contactdaniel', function () {
    return view('countries/uganda/daniels/contactdaniel');
});

// Afdhala Yusuf
Route::get('/afdhal', function () {
    return view('countries/uganda/yusuf/afdhal');
});

Route::get('/aboutafdhal', function () {
    return view('countries/uganda/yusuf/aboutafdhal');
});

Route::get('/contactafdhal', function () {
    return view('countries/uganda/daniels/contactafdhal');
});


// Somalian

//Mohammad Zainab 
Route::get('/zainab', function () {
    return view('countries/somalia/zainab/zainab');
});

Route::get('/aboutzainab', function () {
    return view('countries/somalia/zainab/aboutzainab');
});

Route::get('/contactzainab', function () {
    return view('countries/somalia/zainab/contactzainab');
});

// Burundian

//Nzohabonayo Eric
Route::get('/eric', function () {
    return view('countries/burundi/eric/eric');
});

Route::get('/abouteric', function () {
    return view('countries/burundi/eric/abouteric');
});

Route::get('/contacteric', function () {
    return view('countries/burundi/eric/contacteric');
});



// nigerians

// Jamiu Umar
Route::get('/umar', function () {
    return view('countries/nigeria/umar/umar');
});

Route::get('/aboutumar', function () {
    return view('countries/nigeria/umar/aboutumar');
});

Route::get('/contactumar', function () {
    return view('countries/nigeria/umar/contactumar');
});

// Jamiu abdalla
Route::get('/abdalla', function () {
    return view('countries/nigeria/abdalla/abdalla');
});

Route::get('/aboutabdalla', function () {
    return view('countries/nigeria/abdalla/aboutabdalla');
});

Route::get('/contactabdalla', function () {
    return view('countries/nigeria/abdalla/contactabdalla');
});

// Garaba Lawan
Route::get('/garba', function () {
    return view('countries/nigeria/garba/garba');
});

Route::get('/aboutgarba', function () {
    return view('countries/nigeria/garba/aboutgarba');
});

Route::get('/contactgarba', function () {
    return view('countries/nigeria/garba/contactgarba');
});

// Sadeeya
Route::get('/sadeeya', function () {
    return view('countries/nigeria/sadeeya/sadeeya');
});

Route::get('/aboutsadeeya', function () {
    return view('countries/nigeria/sadeeya/aboutsadeeya');
});

Route::get('/contactsadeeya', function () {
    return view('countries/nigeria/sadeeya/contactsadeeya');
});

// Adamu
Route::get('/adamu', function () {
    return view('countries/nigeria/adamu/adamu');
});

Route::get('/aboutadamu', function () {
    return view('countries/nigeria/adamu/aboutadamu');
});

Route::get('/contactadamu', function () {
    return view('countries/nigeria/adamu/contactadamu');
});

// sayf
Route::get('/sayf', function () {
    return view('countries/nigeria/sayf/sayf');
});

Route::get('/aboutsayf', function () {
    return view('countries/nigeria/sayf/aboutsayf');
});

Route::get('/contactsayf', function () {
    return view('countries/nigeria/sayf/contactsayf');
});

// mustapha
Route::get('/mustapha', function () {
    return view('countries/nigeria/mustapha/mustapha');
});

Route::get('/aboutmustapha', function () {
    return view('countries/nigeria/mustapha/aboutmustapha');
});

Route::get('/contactmustapha', function () {
    return view('countries/nigeria/mustapha/contactmustapha');
});

// Adamu
Route::get('/saji', function () {
    return view('countries/nigeria/saji/saji');
});

Route::get('/aboutsaji', function () {
    return view('countries/nigeria/saji/aboutsaji');
});

Route::get('/contactsaji', function () {
    return view('countries/nigeria/saji/contactsaji');
});
// Mujahid Kabir
Route::get('/mujahid', function () {
    return view('countries/nigeria/mujahid/mujahid');
});

Route::get('/aboutmujahid', function () {
    return view('countries/nigeria/mujahid/aboutmujahid');
});

Route::get('/contactmujahid', function () {
    return view('countries/nigeria/mujahid/contactmujahid');
});

// gorofi
Route::get('/gorofi', function () {
    return view('countries/nigeria/gorofi/gorofi');
});

Route::get('/aboutgorofi', function () {
    return view('countries/nigeria/gorofi/aboutgorofi');
});

Route::get('/contactgorofi', function () {
    return view('countries/nigeria/gorofi/contactgorofi');
});

// Ewumi Saliu
Route::get('/ewumi', function () {
    return view('countries/nigeria/ewumi/ewumi');
});

Route::get('/aboutewumi', function () {
    return view('countries/nigeria/ewumi/aboutewumi');
});

Route::get('/contactewumi', function () {
    return view('countries/nigeria/ewumi/contactewumi');
});

// sariki
Route::get('/sariki', function () {
    return view('countries/nigeria/sariki/sariki');
});

Route::get('/aboutsariki', function () {
    return view('countries/nigeria/sariki/aboutsariki');
});

Route::get('/contactsariki', function () {
    return view('countries/nigeria/sariki/contactsariki');
});

// Tijjani
Route::get('/tijjani', function () {
    return view('countries/nigeria/tijjani/tijjani');
});

Route::get('/abouttijjani', function () {
    return view('countries/nigeria/tijjani/abouttijjani');
});

Route::get('/contacttijjani', function () {
    return view('countries/nigeria/tijjani/contacttijjani');
});

// Ibrahim Lawal
Route::get('/ibrahim', function () {
    return view('countries/nigeria/ibrahim/ibrahim');
});

Route::get('/aboutibrahim', function () {
    return view('countries/nigeria/ibrahim/aboutibrahim');
});

Route::get('/contactibrahim', function () {
    return view('countries/nigeria/ibrahim/contactibrahim');
});


// south Sudan

// agau
Route::get('/agau', function () {
    return view('countries/southsudan/agau/agau');
});

Route::get('/aboutagau', function () {
    return view('countries/southsudan/agau/aboutagau');
});

Route::get('/contactagau', function () {
    return view('countries/southsudan/agau/contactagau');
});

// Martin
Route::get('/martin', function () {
    return view('countries/southsudan/martin/martin');
});

Route::get('/aboutmartin', function () {
    return view('countries/southsudan/martin/aboutmartin');
});

Route::get('/contactmartin', function () {
    return view('countries/southsudan/martin/contactmartin');
});

// ayoub
Route::get('/ayoub', function () {
    return view('countries/southsudan/ayoub/ayoub');
});

Route::get('/aboutayoub', function () {
    return view('countries/southsudan/ayoub/aboutayoub');
});

Route::get('/contactayoub', function () {
    return view('countries/southsudan/ayoub/contactayoub');
});

// Samson
Route::get('/samson', function () {
    return view('countries/southsudan/samson/samson');
});

Route::get('/aboutsamson', function () {
    return view('countries/southsudan/samson/aboutsamson');
});

Route::get('/contactsamson', function () {
    return view('countries/southsudan/samson/contactsamson');
});

// tandele
Route::get('/tandele', function () {
    return view('countries/southsudan/tandele/tandele');
});

Route::get('/abouttandele', function () {
    return view('countries/southsudan/tandele/abouttandele');
});

Route::get('/contacttandele', function () {
    return view('countries/southsudan/tandele/contacttandele');
});

// Countries routes
Route::get('/nigeria', function () {
    return view('countries/nigeria/nigeria');
});

Route::get('/uganda', function () {
    return view('countries/uganda/uganda');
});

Route::get('/southsudan', function () {
    return view('countries/southsudan/southsudan');
});

Route::get('/burundi', function () {
    return view('countries/burundi/burundi');
});

Route::get('/somalia', function () {
    return view('countries/somalia/somalia');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// .............................other pages-----------------------------

Route::get('/daniels', function () {
    return view('countries/uganda/daniels');
});

