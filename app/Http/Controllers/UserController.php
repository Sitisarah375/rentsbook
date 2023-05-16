<?php

namespace App\Http\Controllers;
use App\Models\book;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data = book::all();
        return view('user.index', compact('data'));
    }
}
