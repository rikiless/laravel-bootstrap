<?php

namespace App\Http\Controllers;

use App\Values;
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

    public function storeCustomForm(Request $request)
    {
        foreach ($request->all() as $key => $value) {
            Values::whereName($key)->update(compact('value'));
        }

        return response('', 204);
    }

    public function index()
    {
        return Values::all()->pluck('value', 'name');
    }
}
