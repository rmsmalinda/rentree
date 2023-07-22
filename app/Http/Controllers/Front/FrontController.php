<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class FrontController extends Controller
{
    public function productions(Request $request)
    {
        $product_data       = DB::table('front_products')->orderBy('created_at','desc')->get();

        return view('productions')->with('product_data',$product_data);

    }

    public function contact(Request $request)
    {

        return view('contact');

    }
}
