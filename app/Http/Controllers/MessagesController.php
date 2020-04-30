<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function create(Request $req)
    {
        $message = new Message();
        $message->title = $req->title;
        $message->content = $req->content;
        $message->save();
        return redirect('/');
    }
}