<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class UpdateController extends Controller
{
    public function updateHomePageDashboard(Request $request)
    {



    }

    public function updateFrontProductsDashboard()
    {
       $product_data      = DB::table('front_products')->get();
       return view('core.front.products')->with('product_data',$product_data);

    }

    public function updateFrontProductsFinal(Request $request)
    {
        $title_global               = $request->title;
        $description_global         = $request->description;

        $image_1_global             = "";
        $image_2_global             = "";
        $image_3_global             = "";

         if ($request->hasFile('image_1')) {


            $fileName	            = $request->image_1->getClientOriginalName();
            $request->image_1->storeAs('front_products',$fileName,'public');
            $image_1_global         = "http://romeo.lk/public/storage/front_products/".$request->image_1->getClientOriginalName();

         }

        if ($request->hasFile('image_2')) {

            $fileName	        = $request->image_2->getClientOriginalName();
            $request->image_2->storeAs('front_products',$fileName,'public');
            $image_2_global     = "http://romeo.lk/public/storage/front_products/".$request->image_2->getClientOriginalName();

         }

         if ($request->hasFile('image_3')) {

             $fileName	        = $request->image_3->getClientOriginalName();
             $request->image_3->storeAs('front_products',$fileName,'public');
             $image_3_global    = "http://romeo.lk/public/storage/front_products/".$request->image_3->getClientOriginalName();

          }

          $insert                   = DB::table('front_products')
                                                ->insert(
                                                        array(

                                                            'title'         => $title_global,
                                                            'description'   => $description_global,

                                                            'image_1'       => $image_1_global,
                                                            'image_2'       => $image_2_global,
                                                            'image_3'       => $image_3_global,
                                                            'created_at'    => \Carbon\Carbon::now(),
                                                            'updated_at'    => \Carbon\Carbon::now(),

                                                        ));

          if($insert)
          {
                return view('core.response.success')->with('return_path',"/update_front_products");
          }
          else
          {
                return view('core.response.failed')->with('return_path',"/update_front_products");
           }

    }

}
