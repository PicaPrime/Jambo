<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index()
    {
        // Example: send user info and joined date to the view
        $user = Auth::user();
        $joinedDate = $user ? $user->created_at->format('F j, Y') : null;
        return view('account', [
            'user' => $user,
            'joinedDate' => $joinedDate,
        ]);
    }
}
