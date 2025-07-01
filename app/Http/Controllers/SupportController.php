<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupportController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $joinedDate = $user ? $user->created_at->format('F j, Y') : null;
        return view('support', [
            'user' => $user,
            'joinedDate' => $joinedDate,
        ]);
    }
}
