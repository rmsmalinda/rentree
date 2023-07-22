<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;

class MobileController extends Controller
{

    public function allProducts(Request $request)
    {
        $product_data       = DB::table('core_products')->where('product_quantity','>',0)->get();

        return response()->json([

                          'status'      => 'true',
                          'message'     => 'product_data',
                          'data'        => $product_data

                          ],200);


    }

    public function allCategories(Request $request)
    {
        $category_data       = DB::table('core_categories')->get();

        return response()->json([

                          'status'      => 'true',
                          'message'     => 'product_data',
                          'data'        => $category_data

                          ],200);

    }

    public function productDetails(Request $request)
    {
        $product_id         = $request->product_id;
        $product_data       = DB::table('core_products')->where('product_id',$product_id)->first();

        if($product_data)
        {
                return response()->json([

                                  'status'      => 'true',
                                  'message'     => 'product_data',
                                  'data'        => $product_data

                                  ],200);

        }
        else
        {
                return response()->json([

                                  'status'      => 'false',
                                  'message'     => 'invalid id',

                                  ],200);

        }


    }






   public function mobileLogin(Request $request){

         $email     = $request->email;
         $password  = $request->password;

         $user_data = DB::table('users')->where('email',$email)->first();

         if($user_data != ""){

                  if(Hash::check($password, $user_data->password)){

                          return response()->json([

                                              'status'    => 'true',
                                              'message'   => 'login success',
                                              'data'      => $user_data

                                              ],200);

                  }

                  else{

                          return response()->json([

                                              'status'    => 'false',
                                              'message'   => 'login failed'

                                              ],200);


                  }



         }
         else{

                   return response()->json([

                                       'status'    => 'false',
                                       'message'   => 'login failed'

                                       ],200);

         }







    }


    public function rentNowFinalMobile(Request $request)
    {

        $product_id             = $request->product_id;
        $product_price          = $request->product_price;
        $discount               = $request->discount;
        $bill_number            = $request->bill_number;
        $rental_date            = date("Y-m-d");
        $return_date            = $request->return_date;
        $customer_name          = $request->customer_name;
        $customer_phone         = $request->customer_phone;
        $nic_text               = $request->nic_text;
        $customer_address       = $request->customer_address;

        $rental_id              = "rental-".time();
        $nic_image          = "http://romeo.lk/assets/images/nic/nic.png";

        $current_quantity       = DB::table('core_products')->where('product_id',$product_id)->first()->product_quantity;

        $update_quantity        = DB::table('core_products')
                                            ->where('product_id',$product_id)
                                            ->update(
                                                array(

                                                    'product_quantity' => $current_quantity-1,

                                                ));

        $insert                 = DB::table('rental_data')->insert(array(

                                'rental_id'         => $rental_id,
                                'product_id'        => $product_id,
                                'product_price'     => number_format((float)$product_price, 2, '.', ''),
                                'discount'          => number_format((float)$discount, 2, '.', ''),
                                'bill_number'       => $bill_number,

                                'rental_date'       => $rental_date,
                                'return_date'       => $return_date,
                                'customer_name'     => $customer_name,

                                'customer_phone'    => $customer_phone,
                                'customer_address'  => $customer_address,

                                'nic_text'          => $nic_text,
                                'nic_image'         => $nic_image,

                                'created_at'    => \Carbon\Carbon::now(),
                                'updated_at'    => \Carbon\Carbon::now(),

        ));

        $revenue                = DB::table('revenue_data')
                                        ->insert(
                                            array(

                                                'rental_id'     => $rental_id,
                                                'product_id'    => $product_id,
                                                'date'          => date("Y-m-d"),
                                                'details'       => "RENTED",
                                                'customer'      => $customer_name."|".$nic_text."|".$customer_phone,
                                                'amount'        => number_format((float)$product_price, 2, '.', ''),
                                                'created_at'    => \Carbon\Carbon::now(),
                                                'updated_at'    => \Carbon\Carbon::now(),

                                            ));

      if($insert && $update_quantity && $revenue)
      {
            return response()->json([

                              'status'    => 'true',
                              'message'   => 'success'

                              ],200);
      }
      else
      {
            return response()->json([

                              'status'    => 'false',
                              'message'   => 'failed'

                              ],200);
       }


    }

    //reports for mobile

    public function dailyGiven(Request $request)
    {
        $date           = $request->date;
        $revenue_data   = DB::table('revenue_data')->whereDate('created_at',$date)->get();
        $total_revenue  = $revenue_data->sum('amount');

        if($revenue_data)
        {
                return response()->json([

                                  'status'      => 'true',
                                  'message'     => 'success',
                                  'total'       => number_format((float)$total_revenue, 2, '.', ''),
                                  'data'        => $revenue_data

                                  ],200);

        }
        else
        {
                    return response()->json([

                                      'status'    => 'false',
                                      'message'   => 'failed'

                                      ],200);

        }



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

        if($revenue_data)
        {
                return response()->json([

                                  'status'      => 'true',
                                  'message'     => 'success',
                                  'total'       => number_format((float)$total_revenue, 2, '.', ''),
                                  'data'        => $revenue_data

                                  ],200);

        }
        else
        {
                    return response()->json([

                                      'status'    => 'false',
                                      'message'   => 'failed'

                                      ],200);

        }

    }

    public function fromToGiven(Request $request)
    {
        $from_date      = $request->from;
        $to_date        = $request->to;

        $revenue_data   = DB::table('revenue_data')
                            ->whereBetween('created_at', [$from_date, $to_date])
                            ->get();

        $total_revenue  = $revenue_data->sum('amount');

        if($revenue_data)
        {
                return response()->json([

                                  'status'      => 'true',
                                  'message'     => 'success',
                                  'total'       => number_format((float)$total_revenue, 2, '.', ''),
                                  'data'        => $revenue_data

                                  ],200);

        }
        else
        {
                    return response()->json([

                                      'status'    => 'false',
                                      'message'   => 'failed'

                                      ],200);

        }



    }


    //reports for mobile


    public function orderNowFinalMobile(Request $request)
    {


        $order_id               = "order-".time();

        $product_id             = $request->product_id;

        $product_price          = $request->product_price;
        $purchased              = $request->purchased;
        $discount               = $request->discount;

        $bill_number            = $request->bill_number;

        $ordered_date           = date("Y-m-d");
        $rental_date            = $request->rental_date;
        $return_date            = $request->return_date;



        $customer_name          = $request->customer_name;
        $customer_phone         = $request->customer_phone;
        $nic_text               = $request->nic_text;
        $customer_address       = $request->customer_address;

        $nic_image              = "http://romeo.lk/assets/images/nic/nic.png";


        $current_quantity       = DB::table('core_products')->where('product_id',$product_id)->first()->product_quantity;

        $update_quantity        = DB::table('core_products')
                                            ->where('product_id',$product_id)
                                            ->update(
                                                array(

                                                    'product_quantity' => $current_quantity-1,

                                                ));


        $insert                 = DB::table('ordered_data')
                                    ->insert(array(
                                        'order_id'          => $order_id,
                                        'product_id'        => $product_id,
                                        'product_price'     => number_format((float)$product_price, 2, '.', ''),
                                        'purchased'         => number_format((float)$purchased, 2, '.', ''),
                                        'discount'          => number_format((float)$discount, 2, '.', ''),
                                        'bill_number'       => $bill_number,

                                        'ordered_date'      => $ordered_date,
                                        'rental_date'       => $rental_date,
                                        'return_date'       => $return_date,
                                        'customer_name'     => $customer_name,
                                        'customer_phone'    => $customer_phone,
                                        'customer_address'  => $customer_address,

                                        'nic_text'          => $nic_text,
                                        'nic_image'         => $nic_image,

                                        'created_at'        => \Carbon\Carbon::now(),
                                        'updated_at'        => \Carbon\Carbon::now(),

        ));

        $revenue                = DB::table('revenue_data')
                                        ->insert(
                                            array(

                                                'order_id'      => $order_id,
                                                'product_id'    => $product_id,
                                                'date'          => date("Y-m-d"),
                                                'details'       => "ORDERED",
                                                'customer'      => $customer_name."|".$nic_text."|".$customer_phone,
                                                'amount'        => number_format((float)$purchased, 2, '.', ''),
                                                'created_at'    => \Carbon\Carbon::now(),
                                                'updated_at'    => \Carbon\Carbon::now(),

                                            ));


      if($insert && $update_quantity && $revenue)
      {
            return response()->json([

                              'status'    => 'true',
                              'message'   => 'success'

                              ],200);
      }
      else
      {
            return response()->json([

                              'status'    => 'false',
                              'message'   => 'failed'

                              ],200);
       }


    }


    public function orderedItemsMobile(Request $request)
    {

        $ordered_data          = DB::table('ordered_data')->where('rental_stat',"pending")->get();

        return response()->json([

                          'status'      => 'true',
                          'message'     => 'success',
                          'data'        => $ordered_data

                          ],200);

    }



    public function availableItemsMobile()
    {
        $summary_data           = DB::table('core_products')->where('product_quantity','>',0)->get();

        return response()->json([

                          'status'      => 'true',
                          'message'     => 'success',
                          'data'        => $summary_data,

                          ],200);
    }

    public function unavailableItemsMobile()
    {
        $summary_data           = DB::table('core_products')->where('product_quantity','=',0)->get();

        return response()->json([

                          'status'      => 'true',
                          'message'     => 'success',
                          'data'        => $summary_data,

                          ],200);
    }

    public function rentedItemsMobile()
    {
        $summary_data           = DB::table('rental_data')->get();

        return response()->json([

                          'status'      => 'true',
                          'message'     => 'success',
                          'data'        => $summary_data,

                          ],200);

    }

    public function returnedItemsMobile()
    {
        $summary_data           = DB::table('rental_data')->where('rental_stat',"returned")->get();

        return response()->json([

                          'status'      => 'true',
                          'message'     => 'success',
                          'data'        => $summary_data,

                          ],200);

    }

    public function completeOrderInfoMobile(Request $request)
    {
        $order_id               = $request->order_id;

        $ordered_data           = DB::table('ordered_data')->where('order_id',$order_id)->first();
        $product_id             = $ordered_data->product_id;
        $product_data           = DB::table('core_products')->where('product_id',$product_id)->first();

        if($ordered_data)
        {
                    return response()->json([

                                      'status'          => 'true',
                                      'message'         => 'success',
                                      'ordered_data'    => $ordered_data,
                                      'product_data'    => $product_data,

                                      ],200);
        }
        else
        {
                    return response()->json([

                                      'status'    => 'false',
                                      'message'   => 'failed'

                                      ],200);
        }

    }


    public function completeOrderFinalMobile(Request $request)
    {
        $order_id               = $request->order_id;
        $balance                = $request->balance;

        $ordered_data           = DB::table('ordered_data')->where('order_id',$order_id)->first();
        $product_id             = $ordered_data->product_id;
        $product_data           = DB::table('core_products')->where('product_id',$product_id)->first();

        $update_order           = DB::table('ordered_data')->where('order_id',$order_id)->update(array('rental_stat' => "rented"));

        $insert                 = DB::table('rental_data')->insert(array(

                                'rental_id'         => "rental-".time(),
                                'product_id'        => $product_id,
                                'product_price'     => number_format((float)$ordered_data->product_price, 2, '.', ''),
                                'discount'          => number_format((float)$ordered_data->discount, 2, '.', ''),
                                'bill_number'       => $ordered_data->bill_number,

                                'rental_date'       => $ordered_data->rental_date,
                                'return_date'       => $ordered_data->return_date,
                                'customer_name'     => $ordered_data->customer_name,

                                'customer_phone'    => $ordered_data->customer_phone,
                                'customer_address'  => $ordered_data->customer_address,

                                'nic_text'          => $ordered_data->nic_text,
                                'nic_image'         => $ordered_data->nic_image,

                                'created_at'    => \Carbon\Carbon::now(),
                                'updated_at'    => \Carbon\Carbon::now(),

        ));

        $revenue                = DB::table('revenue_data')
                                        ->insert(
                                            array(

                                                'order_id'      => $order_id,
                                                'product_id'    => $product_id,
                                                'date'          => date("Y-m-d"),
                                                'details'       => "ORDER-COMPLETED",
                                                'customer'      => $ordered_data->customer_name."|".$ordered_data->nic_text."|".$ordered_data->customer_phone,
                                                'amount'        => number_format((float)$balance, 2, '.', ''),
                                                'created_at'    => \Carbon\Carbon::now(),
                                                'updated_at'    => \Carbon\Carbon::now(),

                                            ));


        if($insert && $update_order && $revenue)
        {
                    return response()->json([

                                      'status'          => 'true',
                                      'message'         => 'success',

                                      ],200);
        }
        else
        {
                    return response()->json([

                                      'status'    => 'false',
                                      'message'   => 'failed'

                                      ],200);
        }


    }



    public function pendingItemsMobile(Request $request)
    {

        $pending_data          = DB::table('rental_data')->where('rental_stat',"pending")->get();

        return response()->json([

                          'status'      => 'true',
                          'message'     => 'success',
                          'data'        => $pending_data,

                          ],200);


    }

    public function returnItemInfoMobile(Request $request)
    {
        $rental_id              = $request->rental_id;

        $rental_data            = DB::table('rental_data')->where('rental_id',$rental_id)->first();
        $product_id             = $rental_data->product_id;
        $product_data           = DB::table('core_products')->where('product_id',$product_id)->first();

        if($rental_data)
        {
                    return response()->json([

                                      'status'          => 'true',
                                      'message'         => 'success',
                                      'rental_data'     => $rental_data,
                                      'product_data'    => $product_data,

                                      ],200);
        }
        else
        {
                    return response()->json([

                                      'status'    => 'false',
                                      'message'   => 'failed'

                                      ],200);
        }

    }

    public function returnItemFinalMobile(Request $request)
    {
        $rental_id              = $request->rental_id;

        $rental_data            = DB::table('rental_data')->where('rental_id',$rental_id)->first();
        $product_id             = $rental_data->product_id;
        $update_rental          = DB::table('rental_data')->where('rental_id',$rental_id)->update(array('rental_stat' => "returned"));
        $current_quantity       = DB::table('core_products')->where('product_id',$product_id)->first()->product_quantity;
        $update_quantity        = DB::table('core_products')
                                            ->where('product_id',$product_id)
                                            ->update(
                                                array(

                                                    'product_quantity' => $current_quantity+1,

                                                ));

        if($update_rental && $update_quantity)
        {
                    return response()->json([

                                      'status'          => 'true',
                                      'message'         => 'success',

                                      ],200);
        }
        else
        {
                    return response()->json([

                                      'status'    => 'false',
                                      'message'   => 'failed'

                                      ],200);
        }

    }













}
