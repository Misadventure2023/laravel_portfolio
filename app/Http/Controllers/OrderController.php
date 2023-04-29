<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
 public function index(){

   $data = Order::paginate(10);
    return view('admin/order',['order'=>$data]);
 }

}
