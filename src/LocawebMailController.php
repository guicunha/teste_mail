<?php

namespace Guicunha\Locawebmailmarketing;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LocawebMailController extends Controller
{


    public function add($a, $b){
        echo $a + $b;
    }

    public function subtract($a, $b){
        echo $a - $b;
    }

}
