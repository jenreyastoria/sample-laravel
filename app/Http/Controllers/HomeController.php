<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $variable = 'Hello, World';
        $variable2 = 'RinneganTV';

        $variable3 = $variable . ' ' . $variable2;

        $variable4 = sprintf('%s %s', $variable, $variable2);

        // dd($variable, $variable2, $variable3, $variable4);

        return view('home', [
            'variable' => $variable,
            'variable2' => $variable2,
            'variable3' => $variable3,
            'variable4' => $variable4,

        ]);
    }
}
