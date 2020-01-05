<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomController extends Controller
{
    public function photo(Request $request) {
        // dd($request);
        $response = "resopnse";
        return $response;
    }
}
