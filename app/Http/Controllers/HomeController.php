<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function store(Request $request)
    {
        return $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'question' => 'required'
        ]);
}
}
