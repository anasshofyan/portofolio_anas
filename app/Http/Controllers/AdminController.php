<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Message;
use DataTables;

class AdminController extends Controller
{
    public function index()
    {
        // $dts = Datatables::of(Message::all())->make(true);
    	return view('admin.admin');
    }

    public function login()
    {
    	return view('admin.auth.login');
    }
     public function json(){
        return Datatables::of(Message::all())->make(true);
    }
}
