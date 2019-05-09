<?php

namespace App\Http\Controllers;
use App\Message;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function portofolio()
    {
    	return view('user.portofolio');
    }
    public function about()
    {
    	return view('user.about');
    }
    public function contact()
    {
       	return view('user.contact');
    }
    //post

    public function create()
    {
        // validate
        request()->validate([
            'name' => 'required|min:3|max:30',
            'email' => 'required|min:5|max:30',
            'phone' => 'required|min:11|max:12',
            'message' => 'required|min:8|max:500'
        ]);

        $messages = request()->all();
        Message::create($messages);

        return back();
    }
}
