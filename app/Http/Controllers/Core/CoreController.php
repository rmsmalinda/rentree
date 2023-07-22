<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class CoreController extends Controller
{
    public function rentProduct(Request $request)
    {
        $category_id            = DB::table('core_categories')->first()->category_id;
        $category_name          = DB::table('core_categories')->first()->category_name;

        $category_data          = DB::table('core_categories')->get();
        $product_data           = DB::table('core_products')->where('category_id',$category_id)->where('product_quantity','>',0)->get();

        return view('core.rent.rent')
                    ->with('category_data',$category_data)
                    ->with('product_data',$product_data)
                    ->with('category_name',$category_name);
    }

    public function rentProductFilter(Request $request)
    {
        $category_id            = $request->category_id;
        $category_name          = DB::table('core_categories')->where('category_id',$category_id)->first()->category_name;

        $category_data          = DB::table('core_categories')->get();
        $product_data           = DB::table('core_products')->where('category_id',$category_id)->where('product_quantity','>',0)->get();

        return view('core.rent.rent')
                    ->with('category_data',$category_data)
                    ->with('product_data',$product_data)
                    ->with('category_name',$category_name);

    }

    /** ----------------------------------ORDER AREA ---------------------------------------------------------------*/



    public function orderNowDashboard(Request $request)
    {
        $product_id             = $request->product_id;
        $product_data           = DB::table('core_products')->where('product_id',$product_id)->first();

        return view('core.order.order_now')->with('product_data',$product_data);

    }

    public function orderNowFinal(Request $request)
    {
        $nic_image;

        $product_id             = $request->product_id;
        $order_id               = "order-".time();
        $bill_number            = $request->bill_number;

        $ordered_date           = date("Y-m-d");
        $rental_date            = $request->rental_date;
        $return_date            = $request->return_date;

        $product_price          = $request->product_price;
        $purchased              = $request->purchased;
        $discount               = $request->discount;

        $customer_name          = $request->customer_name;
        $customer_phone         = $request->customer_phone;
        $nic_text               = $request->nic_text;
        $customer_address       = $request->customer_address;

         if ($request->hasFile('nic_image')) {


            $fileName	        = "nic-".time().".png";
            $request->nic_image->storeAs('nic',$fileName,'public');
            $nic_image          = "http://romeo.lk/public/storage/nic/".$fileName;

         }
         else{

            $nic_image          = "http://romeo.lk/assets/images/nic/nic.png";
         }


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
            return view('core.response.success')->with('return_path',"/rent_product");
      }
      else
      {
            return view('core.response.failed')->with('return_path',"/rent_product");
       }


    }

    public function orderedItemsDashboard(Request $request)
    {
        $ordered_data          = DB::table('ordered_data')->where('rental_stat',"pending")->get();

        return view('core.order.ordered')
                    ->with('ordered_data',$ordered_data);

    }

    public function completeOrderDashboard(Request $request)
    {
        $order_id               = $request->order_id;

        $ordered_data           = DB::table('ordered_data')->where('order_id',$order_id)->first();
        $product_id             = $ordered_data->product_id;
        $product_data           = DB::table('core_products')->where('product_id',$product_id)->first();

        return view('core.order.complete_order')
                    ->with('ordered_data',$ordered_data)
                    ->with('product_data',$product_data);


    }

    public function completeOrderFinal(Request $request)
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
            return view('core.response.success')->with('return_path',"/rent_product");
      }
      else
      {
            return view('core.response.failed')->with('return_path',"/rent_product");
       }


    }


    /** ----------------------------------ORDER AREA ---------------------------------------------------------------*/


        /** ----------------------------------RENT AREA ---------------------------------------------------------------*/

    public function rentNowDashboard(Request $request)
    {
        $product_id             = $request->product_id;
        $product_data           = DB::table('core_products')->where('product_id',$product_id)->first();

        return view('core.rent.rent_now')->with('product_data',$product_data);

    }

    public function rentNowFinal(Request $request)
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

         if ($request->hasFile('nic_image')) {


            $fileName	        = "nic-".time().".png";
            $request->nic_image->storeAs('nic',$fileName,'public');
            $nic_image          = "http://romeo.lk/public/storage/nic/".$fileName;

         }
         else{

            $nic_image          = "http://romeo.lk/assets/images/nic/nic.png";
         }

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
            return view('core.response.success')->with('return_path',"/rent_product");
      }
      else
      {
            return view('core.response.failed')->with('return_path',"/rent_product");
       }


    }

    /** ----------------------------------rent AREA ---------------------------------------------------------------*/


        /** ----------------------------------PENDING AREA && RETURN AREA---------------------------------------------------------------*/

    public function pendingItemsDashboard(Request $request)
    {

        $pending_data          = DB::table('rental_data')->where('rental_stat',"pending")->get();

        return view('core.pending.pending')
                    ->with('pending_data',$pending_data);


    }

    public function returnItemDashboard(Request $request)
    {
        $rental_id              = $request->rental_id;

        $rental_data            = DB::table('rental_data')->where('rental_id',$rental_id)->first();
        $product_id             = $rental_data->product_id;
        $product_data           = DB::table('core_products')->where('product_id',$product_id)->first();

        return view('core.return.return')
                    ->with('rental_data'    ,$rental_data)
                    ->with('product_data'   ,$product_data);

    }

    public function returnItemFinal(Request $request)
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
            return view('core.response.success')->with('return_path',"/pending_items");
      }
      else
      {
            return view('core.response.failed')->with('return_path',"/pending_items");
       }

    }

    /** ----------------------------------PENDING AREA && RETURN AREA---------------------------------------------------------------*/




    public function categoryDashboard(Request $request)
    {
        $category_data  = DB::table('core_categories')->get();
        return view('core.categories.dashboard')->with('category_data',$category_data);

    }

    public function addCategory(Request $request)
    {
        $category_id    = "category-".time();

        $category       = $request->category;
        $insert         = DB::table('core_categories')
                                ->insert(array(

                                    'category_id'       => $category_id,
                                    'category_name'     => $category,
                                    'created_at'    => \Carbon\Carbon::now(),
                                    'updated_at'    => \Carbon\Carbon::now(),

                                ));

          if($insert)
          {
                return view('core.response.success')->with('return_path',"/category_dashboard");
          }
          else
          {
                return view('core.response.failed')->with('return_path',"/category_dashboard");
           }


    }

    public function categoryDeleteDashboard(Request $request)
    {
            $category_id        = $request->category_id;
            return view('core.categories.delete_confirm')->with('category_id',$category_id);
    }

    public function categoryDeleteFinal(Request $request)
    {
          $category_id        = $request->category_id;

          $delete               = DB::table('core_categories')->where('category_id',$category_id)->delete();

          $this->K_ARRANGE("mysql","core_categories");


          if($delete)
          {
                return view('core.response.success')->with('return_path',"/category_dashboard");
          }
          else
          {
                return view('core.response.failed')->with('return_path',"/category_dashboard");
           }


    }

    public function categoryUpdateDashboard(Request $request)
    {
          $category_id          = $request->category_id;
          $category_data        = DB::table('core_categories')->where('category_id',$category_id)->first();
          return view('core.categories.update')->with('category_data',$category_data);

    }

    public function categoryUpdateFinal(Request $request)
    {
          $category_id          = $request->category_id;
          $category_name        = $request->category_name;

          $update               = DB::table('core_categories')
                                        ->where('category_id',$category_id)
                                        ->update(
                                                array(

                                                    'category_name' => $category_name,

                                                ));

          if($update)
          {
                return view('core.response.success')->with('return_path',"/category_dashboard");
          }
          else
          {
                return view('core.response.failed')->with('return_path',"/category_dashboard");
           }

    }

    //productions


    public function productDashboard(Request $request)
    {
            $product_data   = DB::table('core_products')->get();
            $category_data  = DB::table('core_categories')->get();

            return view('core.products.dashboard')->with('product_data',$product_data)->with('category_data',$category_data);

    }

    public function addCoreProduct(Request $request)
    {
            $product_image_name;

            $category_id        = $request->category_id;
            $category_name      = DB::table('core_categories')->where('category_id',$category_id)->first()->category_name;

            $product_id         = "product-".time();
            $product_code       = $request->product_code;
            $product_name       = $request->product_name;
            $product_price      = $request->product_price;
            $product_quantity   = $request->product_quantity;

             if ($request->hasFile('product_image')) {


                $fileName	            = "product-".time().".png";
                $request->product_image->storeAs('core_products',$fileName,'public');
                $product_image_name     = "http://romeo.lk/public/storage/core_products/".$fileName;

             }
             else{

                $product_image_name     = "http://romeo.lk/assets/images/dummy/dummy.jpg";
             }

            $insert         = DB::table('core_products')
                                ->insert(array(

                                    'product_id'        => $product_id,
                                    'product_code'      => $product_code,
                                    'product_name'      => $product_name,

                                    'category_id'       => $category_id,
                                    'category_name'     => $category_name,

                                    'product_price'     => $product_price,
                                    'product_quantity'  => $product_quantity,
                                    'product_image'     => $product_image_name,

                                    'created_at'    => \Carbon\Carbon::now(),
                                    'updated_at'    => \Carbon\Carbon::now(),

                                ));

              if($insert)
              {
                    return view('core.response.success')->with('return_path',"/product_dashboard");
              }
              else
              {
                    return view('core.response.failed')->with('return_path',"/product_dashboard");
               }




    }

    public function productDeleteDashboard(Request $request)
    {
            $product_id        = $request->product_id;
            return view('core.products.delete_confirm')->with('product_id',$product_id);
    }

    public function productDeleteFinal(Request $request)
    {
          $product_id        = $request->product_id;

          $delete               = DB::table('core_products')->where('product_id',$product_id)->delete();

          $this->K_ARRANGE("mysql","core_products");


          if($delete)
          {
                return view('core.response.success')->with('return_path',"/product_dashboard");
          }
          else
          {
                return view('core.response.failed')->with('return_path',"/product_dashboard");
           }

    }

    public function productUpdateDashboard(Request $request)
    {

          $product_id           = $request->product_id;
          $product_data         = DB::table('core_products')->where('product_id',$product_id)->first();
          $category_data        = DB::table('core_categories')->get();
          return view('core.products.update')->with('product_data',$product_data)->with('category_data',$category_data);

    }

    public function productUpdateFinal(Request $request)
    {

            $product_image_name;

            $product_id         = $request->product_id;


            $category_id        = $request->category_id;
            $category_name      = DB::table('core_categories')->where('category_id',$category_id)->first()->category_name;

            $product_code       = $request->product_code;
            $product_name       = $request->product_name;
            $product_price      = $request->product_price;

            $product_quantity   = $request->product_quantity;

             if ($request->hasFile('product_image')) {


                $fileName	            = "product-".time().".png";
                $request->product_image->storeAs('core_products',$fileName,'public');
                $product_image_name     = "http://romeo.lk/public/storage/core_products/".$fileName;

             }
             else{

                $product_image_name = DB::table('core_products')->where('product_id',$product_id)->first()->product_image;
             }

                $update         = DB::table('core_products')
                                ->where('product_id',$product_id)
                                ->update(array(

                                    'product_code'      => $product_code,
                                    'product_name'      => $product_name,

                                    'category_id'       => $category_id,
                                    'category_name'     => $category_name,

                                    'product_price'     => $product_price,
                                    'product_quantity'  => $product_quantity,
                                    'product_image'     => $product_image_name,

                                    'created_at'    => \Carbon\Carbon::now(),
                                    'updated_at'    => \Carbon\Carbon::now(),

                                ));

              if($update)
              {
                    return view('core.response.success')->with('return_path',"/product_dashboard");
              }
              else
              {
                    return view('core.response.failed')->with('return_path',"/product_dashboard");
               }




    }
    //productions





    public function K_ARRANGE($CONNECTION,$TABLE)
    {
        DB::connection($CONNECTION)->statement("SET @count = 0;");
        DB::connection($CONNECTION)->statement("UPDATE `$TABLE` SET `$TABLE`.`id` = @count:= @count + 1;");
        DB::connection($CONNECTION)->statement("ALTER TABLE `$TABLE` AUTO_INCREMENT = 1;");
    }


}
