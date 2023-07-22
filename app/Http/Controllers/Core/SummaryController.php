<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class SummaryController extends Controller
{
    public function available()
    {
        $summary_data           = DB::table('core_products')->where('product_quantity','>',0)->get();
        return view('core.summary.available')->with('summary_data',$summary_data);

    }

    public function unavailable()
    {
        $summary_data           = DB::table('core_products')->where('product_quantity','=',0)->get();
        return view('core.summary.unavailable')->with('summary_data',$summary_data);

    }

    public function rented()
    {
        $summary_data           = DB::table('rental_data')->get();
        return view('core.summary.rented')->with('summary_data',$summary_data);


    }

    public function returned()
    {
        $summary_data           = DB::table('rental_data')->where('rental_stat',"returned")->get();
        return view('core.summary.returned')->with('summary_data',$summary_data);


    }

}
