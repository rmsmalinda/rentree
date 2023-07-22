<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function rentRequests(Request $request)
    {
        return view('core.requests.requests');
    }
}
