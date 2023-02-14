<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AjaxDataController extends Controller
{
    //
    protected function insertdata(Request $request)
    {
        $name = $request->name;
        $username = $request->username;;
        $password = $request->password;
        $rolelevel = $request->rolelevel;
        $roleid = $request->roleid;


        //$sql = "INSERT INTO `users` (`username`,`password`,`rolelevel`,`roleid`,`name`) VALUES ('$username','$password','$rolelevel','$roleid','$name')";   
        //$query = DB::table('users')

        $query = DB::insert('insert into users (username, password, rolelevel, roleid, name) values (?, ?, ?, ?, ?)', [$username, $password, $rolelevel, $roleid, $name]);
        if ($query == true) {
            $data = array(
                'status' => 'success',
            );
            echo json_encode($data);
        } else {
        
            $data = array(
                'status' => 'failed',
            );
            echo json_encode($data);
        }
    }
    
    protected function fetchdata()
    {
        
    }
}
