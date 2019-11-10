<?php

namespace App\Http\Controllers;
use App\Message;
use App\Evidence;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    
    public function home()
    {
        $messageCounter = Message::count();
        $evidenceCounter = Evidence::count();
        $evidences = Evidence::paginate(1);
        $data = [
            'mCounter'=>$messageCounter,
            'eCounter'=>$evidenceCounter,
            'evidences'=> $evidences,
        ];
        return view('welcome',$data);
    }
}
