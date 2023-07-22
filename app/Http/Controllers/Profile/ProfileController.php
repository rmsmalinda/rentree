<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function myProfile()
    {
        $email          = Auth::user()->email;
        $user_data      = DB::table('users')->where('email',$email)->first();

        return view('core.profile.profile')->with('user_data',$user_data);

    }

    public function updateProfileImage(Request $request)
    {

    		if ($request->hasFile('image')) {

                $email              = $request->email;
    			$fileName	        = $request->image->getClientOriginalName();

    			$request->image->storeAs('user_images',$fileName,'public');

                $image_data         = "https://romeo.lk/public/storage/user_images/".$request->image->getClientOriginalName();


                $customerData       = DB::connection('mysql')
                                                    ->table('users')
                                                    ->where('email',$email)
                                                    ->update(
                                                        array(

                                                            'image' => $image_data,

                                                        ));

    			return redirect()->back();

    		}

    		else{

    			return redirect()->back();
    		}



    }

    public function updateProfileData(Request $request)
    {
            $name               = $request->name;
            $email              = $request->email;
            $password           = $request->password;

            $save               = DB::table('users')
                                        ->where('email',Auth::user()->email)
                                        ->update(array(

                                                'name'      => $name,
                                                'email'     => $email,
                                                'password'  => Hash::make($password),


                                        ));

            return redirect()->back();

    }

}
