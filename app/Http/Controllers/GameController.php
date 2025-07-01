<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        // Example: send a variable to the view
        $gameTitle = 'Bitcoin Crash Game';
        return view('game', [
            'gameTitle' => $gameTitle,
        ]);
    }
}
