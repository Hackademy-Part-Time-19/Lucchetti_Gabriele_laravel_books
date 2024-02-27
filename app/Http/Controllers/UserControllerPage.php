<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserControllerPage extends Controller
{
    public function auth(){
        return view('user.home');
    }
    public function index(){
        $books= auth()->user()->books;
       
        return view('user.index', compact('books'));
    }
}
