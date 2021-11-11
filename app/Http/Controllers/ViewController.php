<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    function showForm(){
    // Untuk meload data yang akan dimuat di form
    return view('showgreetings');
    }
    function resultGreetings(){
    // Untuk meload data yang akan dimuat di form
    return view('tugas');
    }
    function showUTS(){
        return view('pwebuts');
    }
    function showTugasPHP(){
        return view('tugasPHP');
    }
    function resultTugasPHP(){
        return view('resulttugasPHP');
    }
}
