<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        // Example: send a variable to the view
        $faqTitle = 'Frequently Asked Questions';
        return view('faq', [
            'faqTitle' => $faqTitle,
        ]);
    }
}
