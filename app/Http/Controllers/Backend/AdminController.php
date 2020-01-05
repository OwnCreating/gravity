<?php

namespace App\Http\Controllers\Backend;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function list() {
        $customers = User::get();
        
        return view('backend.customer.list', compact('customers'));
    }
}
