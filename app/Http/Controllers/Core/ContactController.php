<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class ContactController extends Controller
{
    public function saveMessage(Request $request)
    {
        //up

        $name           = $request->name;
        $email          = $request->email;
        $subject        = $request->subject;
        $message        = $request->message;

        $insert         = DB::table('contact_data')
                                ->insert(
                                    array(

                                        'name'      => $name,
                                        'email'     => $email,
                                        'subject'   => $subject,
                                        'message'   => $message,
                                        'created_at'    => \Carbon\Carbon::now(),
                                        'updated_at'    => \Carbon\Carbon::now(),

                                    ));
        return redirect()->back();


    }


    public function allMessages(Request $request)
    {
        $contact_data       = DB::table('contact_data')->get();

        return view('core.front.contact')->with('contact_data',$contact_data);


    }

    public function test()
    {


    }

}
