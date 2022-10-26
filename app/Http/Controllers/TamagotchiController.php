<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TamagotchiController extends Controller
{
    public function liste() {
        return view('pages/tamagotchi-liste');
    }




}
