<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/mobile_login'     , 'App\Http\Controllers\Mobile\MobileController@mobileLogin');

Route::get('/all_products'          , 'App\Http\Controllers\Mobile\MobileController@allProducts');
Route::get('/all_categories'        , 'App\Http\Controllers\Mobile\MobileController@allCategories');
Route::get('/product_info'          , 'App\Http\Controllers\Mobile\MobileController@productDetails');

Route::post('/rent_now_final_mobile' , 'App\Http\Controllers\Mobile\MobileController@rentNowFinalMobile');


//revenue reports

Route::post('/revenue_daily'             , 'App\Http\Controllers\Mobile\MobileController@dailyGiven');
Route::post('/revenue_monthly'           , 'App\Http\Controllers\Mobile\MobileController@monthlyGiven');
Route::post('/revenue_from_to'           , 'App\Http\Controllers\Mobile\MobileController@fromToGiven');

//revenue reports

//order now
//orderedItemsMobile

Route::post('/order_now_final_mobile'   , 'App\Http\Controllers\Mobile\MobileController@orderNowFinalMobile');
Route::post('/ordered_items'            , 'App\Http\Controllers\Mobile\MobileController@orderedItemsMobile');

//COMPLETE ORDER
Route::post('/complete_order_info'      , 'App\Http\Controllers\Mobile\MobileController@completeOrderInfoMobile');
Route::post('/complete_order_final'     , 'App\Http\Controllers\Mobile\MobileController@completeOrderFinalMobile');
//COMPLETE ORDER

//pending & return

Route::post('/pending_items'            , 'App\Http\Controllers\Mobile\MobileController@pendingItemsMobile');
Route::post('/return_item_info'         , 'App\Http\Controllers\Mobile\MobileController@returnItemInfoMobile');
Route::post('/return_item_final'        , 'App\Http\Controllers\Mobile\MobileController@returnItemFinalMobile');

//pending & return

//order now

//summary
Route::post('/summary_available'        , 'App\Http\Controllers\Mobile\MobileController@availableItemsMobile');
Route::post('/summary_unavailable'      , 'App\Http\Controllers\Mobile\MobileController@unavailableItemsMobile');
Route::post('/summary_rented'           , 'App\Http\Controllers\Mobile\MobileController@rentedItemsMobile');
Route::post('/summary_returned'         , 'App\Http\Controllers\Mobile\MobileController@returnedItemsMobile');
//summary


