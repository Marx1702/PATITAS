<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listController extends Controller
{
    public function __invoke()
    {
        return view('list');
    } //
}
