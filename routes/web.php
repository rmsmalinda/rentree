<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//FRONT AREA


Route::get('/', function () {
    return view('welcome');
});

Route::get('/productions'   , 'App\Http\Controllers\Front\FrontController@productions');
Route::get('/contact'       , 'App\Http\Controllers\Front\FrontController@contact');


//FRONT AREA

/**----------------AUTHENTICATION----------------------*/

Auth::routes();

Route::get('/sign_out_system','App\Http\Controllers\Auth\LogoutController@getSignOut' );

/**----------------AUTHENTICATION----------------------*/

// start - supun

// RENT REQUEST
Route::get('/rent_requests'          , 'App\Http\Controllers\Core\RequestController@rentRequests')->middleware('auth');



//supun - end


//update_profile_image

Route::get('/profile'               , 'App\Http\Controllers\Profile\ProfileController@myProfile')->middleware('auth');
Route::post('/update_profile_image' , 'App\Http\Controllers\Profile\ProfileController@updateProfileImage')->middleware('auth');
Route::post('/update_profile_data'  , 'App\Http\Controllers\Profile\ProfileController@updateProfileData')->middleware('auth');
//update_profile_image

//rent

Route::get('/rent_product'          , 'App\Http\Controllers\Core\CoreController@rentProduct')->middleware('auth');
Route::get('/rent_product_filter'   , 'App\Http\Controllers\Core\CoreController@rentProductFilter')->middleware('auth');
Route::get('/rent_now_dashboard'    , 'App\Http\Controllers\Core\CoreController@rentNowDashboard')->middleware('auth');
Route::post('/rent_now_final'       , 'App\Http\Controllers\Core\CoreController@rentNowFinal')->middleware('auth');

//rent

//order
Route::get('/order_now_dashboard'       , 'App\Http\Controllers\Core\CoreController@orderNowDashboard')->middleware('auth');
Route::post('/order_now_final'          , 'App\Http\Controllers\Core\CoreController@orderNowFinal')->middleware('auth');
Route::get('/ordered_items'             , 'App\Http\Controllers\Core\CoreController@orderedItemsDashboard')->middleware('auth');
Route::get('/complete_order_dashboard'  , 'App\Http\Controllers\Core\CoreController@completeOrderDashboard')->middleware('auth');
Route::post('/complete_order_final'      , 'App\Http\Controllers\Core\CoreController@completeOrderFinal')->middleware('auth');
//order

//pending & return

Route::get('/pending_items'             , 'App\Http\Controllers\Core\CoreController@pendingItemsDashboard')->middleware('auth');
Route::get('/return_item_dashboard'     , 'App\Http\Controllers\Core\CoreController@returnItemDashboard')->middleware('auth');
Route::get('/return_item_final'     , 'App\Http\Controllers\Core\CoreController@returnItemFinal')->middleware('auth');
//pending & return


Route::get('/update_front_products'         , 'App\Http\Controllers\Front\UpdateController@updateFrontProductsDashboard')->middleware('auth');
Route::post('/update_front_products_final'  , 'App\Http\Controllers\Front\UpdateController@updateFrontProductsFinal')->middleware('auth');

//front admin

//products

Route::get('/product_dashboard'         , 'App\Http\Controllers\Core\CoreController@productDashboard')->middleware('auth');
Route::post('/add_core_product'          , 'App\Http\Controllers\Core\CoreController@addCoreProduct')->middleware('auth');

Route::get('/product_delete_confirm'   , 'App\Http\Controllers\Core\CoreController@productDeleteDashboard')->middleware('auth');
Route::get('/product_delete_final'     , 'App\Http\Controllers\Core\CoreController@productDeleteFinal')->middleware('auth');

Route::get('/product_update_confirm'   , 'App\Http\Controllers\Core\CoreController@productUpdateDashboard')->middleware('auth');
Route::post('/product_update_final'     , 'App\Http\Controllers\Core\CoreController@productUpdateFinal')->middleware('auth');


//products

//categories

Route::get('/category_dashboard'        , 'App\Http\Controllers\Core\CoreController@categoryDashboard')->middleware('auth');
Route::post('/add_core_category'        , 'App\Http\Controllers\Core\CoreController@addCategory')->middleware('auth');

Route::get('/category_delete_confirm'   , 'App\Http\Controllers\Core\CoreController@categoryDeleteDashboard')->middleware('auth');
Route::get('/category_delete_final'     , 'App\Http\Controllers\Core\CoreController@categoryDeleteFinal')->middleware('auth');

Route::get('/category_update_confirm'   , 'App\Http\Controllers\Core\CoreController@categoryUpdateDashboard')->middleware('auth');
Route::get('/category_update_final'     , 'App\Http\Controllers\Core\CoreController@categoryUpdateFinal')->middleware('auth');

//categories

//summary

Route::get('/summary_available'         , 'App\Http\Controllers\Core\SummaryController@available')->middleware('auth');
Route::get('/summary_unavailable'       , 'App\Http\Controllers\Core\SummaryController@unavailable')->middleware('auth');
Route::get('/summary_rented'            , 'App\Http\Controllers\Core\SummaryController@rented')->middleware('auth');
Route::get('/summary_returned'          , 'App\Http\Controllers\Core\SummaryController@returned')->middleware('auth');


//summary

//revenue

Route::get('/revenue_daily'             , 'App\Http\Controllers\Core\RevenueController@daily')->middleware('auth');
Route::get('/revenue_daily_given'       , 'App\Http\Controllers\Core\RevenueController@dailyGiven')->middleware('auth');
Route::get('/revenue_monthly'           , 'App\Http\Controllers\Core\RevenueController@monthly')->middleware('auth');
Route::get('/revenue_monthly_given'     , 'App\Http\Controllers\Core\RevenueController@monthlyGiven')->middleware('auth');
Route::get('/revenue_from_to'           , 'App\Http\Controllers\Core\RevenueController@fromTo')->middleware('auth');
Route::get('/revenue_from_to_final'     , 'App\Http\Controllers\Core\RevenueController@fromToFinal')->middleware('auth');

//revenue

//contact us

Route::post('/send_message'             , 'App\Http\Controllers\Core\ContactController@saveMessage');
Route::get('/all_message'              , 'App\Http\Controllers\Core\ContactController@allMessages')->middleware('auth');
//contact us



