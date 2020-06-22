<?php

namespace App\Http\Controllers;

use App\Values;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function values()
    {
        return Values::all()->pluck('value', 'name');
    }

    public function store(Request $request)
    {
        return $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'question' => 'required'
        ]);
    }

    public function storeCustomForm(Request $request)
    {
        foreach ($request->all() as $key => $value) {
            Values::whereName($key)->update(compact('value'));
        }

        return response('', 204);
    }
}
