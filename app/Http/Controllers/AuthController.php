<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller


{
    public function me (){
    return [
        'NIS' => 3103120168,
        'Name' => 'Noval F',
        'Phone' => '081215318009',
        'Class' => 'XII RPL 5'
    ];
    }
};
