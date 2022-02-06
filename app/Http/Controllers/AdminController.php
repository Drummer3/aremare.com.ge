<?php

namespace App\Http\Controllers;

use App\Models\OrderRequests;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    // 
    // 
    public function admin() {
        $orders = OrderRequests::latest()->get();
        return view('auth.admin')->with('orders', $orders);
    }
}
