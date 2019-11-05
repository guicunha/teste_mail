<?php

Route::get('add/{a}/{b}', 'Guicunha\Locawebmailmarketing\LocawebMailController@add');
Route::get('subtract/{a}/{b}', 'Guicunha\Locawebmailmarketing\LocawebMailController@subtract');


Route::get('create', function () {
    echo 'Hello from the calculator package!';
});
