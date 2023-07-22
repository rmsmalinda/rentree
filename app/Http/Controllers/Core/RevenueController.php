<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class RevenueController extends Controller
{
    public function daily(Request $request)
    {
        $date           = date("Y-m-d");
        $revenue_data   = DB::table('revenue_data')->whereDate('created_at',$date)->get();
        $total_revenue  = $revenue_data->sum('amount');
        return view('core.revenue.daily')
                        ->with('date',$date)
                        ->with('revenue_data',$revenue_data)
                        ->with('total_revenue',number_format((float)$total_revenue, 2, '.', ''));


    }

    public function dailyGiven(Request $request)
    {
        $date           = $request->date;
        $revenue_data   = DB::table('revenue_data')->whereDate('created_at',$date)->get();
        $total_revenue  = $revenue_data->sum('amount');
        return view('core.revenue.daily')
                        ->with('date',$date)
                        ->with('revenue_data',$revenue_data)
                        ->with('total_revenue',number_format((float)$total_revenue, 2, '.', ''));

    }

    public function monthly(Request $request)
    {
        $year           = date("Y");
        $month          = date("m");

        $revenue_data   = DB::table('revenue_data')
                            ->whereMonth('created_at', '=',$month)
                            ->whereYear('created_at','=',$year)
                            ->get();

        $total_revenue  = $revenue_data->sum('amount');

        return view('core.revenue.monthly')
                        ->with('year',$year)
                        ->with('month',$month)
                        ->with('revenue_data',$revenue_data)
                        ->with('total_revenue',number_format((float)$total_revenue, 2, '.', ''));



    }

    public function monthlyGiven(Request $request)
    {
        $year           = date("Y");
        $month          = $request->month;

        $revenue_data   = DB::table('revenue_data')
                            ->whereMonth('created_at', '=',$month)
                            ->whereYear('created_at','=',$year)
                            ->get();

        $total_revenue  = $revenue_data->sum('amount');

        return view('core.revenue.monthly')
                        ->with('year',$year)
                        ->with('month',$month)
                        ->with('revenue_data',$revenue_data)
                        ->with('total_revenue',number_format((float)$total_revenue, 2, '.', ''));

    }

    public function fromTo(Request $request)
    {
        return view('core.revenue.fromto_select');

    }

    public function fromToFinal(Request $request)
    {
        $from_date      = $request->from_date;
        $to_date        = $request->to_date;

        $revenue_data   = DB::table('revenue_data')
                            ->whereBetween('created_at', [$from_date, $to_date])
                            ->get();

        $total_revenue  = $revenue_data->sum('amount');

        return view('core.revenue.fromto')
                        ->with('from',$from_date)
                        ->with('to',$to_date)
                        ->with('revenue_data',$revenue_data)
                        ->with('total_revenue',number_format((float)$total_revenue, 2, '.', ''));



    }

}
