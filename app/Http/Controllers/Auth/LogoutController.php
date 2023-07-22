<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LogoutController extends Controller
{
    public function getSignOut() {

    	Auth::logout();
    	return redirect('/login');

    }
}
