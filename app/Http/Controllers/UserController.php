<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    
    //
    //$resultcount = DB::select('select * from users where username = ? and password = ?', [$username, $password]);
    public function index()
    {
        return view('login');
    }
    public function authenticated(Request $request)
    {

        $username = $request->user;
        $password = $request->pass;
        
        //$countcheck = DB::select('select * from users where username = ? and password = ?', [$username, $password])->first()->count();
        $countcheck = DB::table('users')
                    ->where('username', $username)
                    ->where('password', $password)
                    ->exists();
        if($countcheck)
        {
            //$roleid = DB::select('select roleid from users where username = ?',[$username])->first();
            $roleid = DB::table('users')
                    ->select('roleid')
                    ->where('username', $username)
                    ->first();
            $rid= $roleid->roleid;
            if ($rid == 1)
            {
                //redirect to userdashboard
                return view('user/userdashboard');
            }

            //to be added: Department Head,Sao,PCO
            else if($rid == 2)
            {
                //redirect to admin dashboard
                                    //test
                return redirect('admin/adminaccounts');
            }
            else
            {
                //return to login page
                return redirect('login');
                $alert = "<script type='text/javascript'>alert('Login failed. Invalid username or password.');</script>";
                echo $alert;
            }
        }
    }   
}
