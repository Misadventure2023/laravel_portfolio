<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class UserController extends Controller
{
    public function index(){
        return view('admin/login');
    }

    public function dashBoard(){
        return view('admin/dashboard');
    }
}
