<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class HomeContoller extends Controller
{
    public function index()
    {
        $massages = Message::all();


        return view('home', ['messages' => $massages]);
    }
}