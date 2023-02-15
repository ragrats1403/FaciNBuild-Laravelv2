<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Datatables;
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
    
    function getdata()
    {
        $accounts = DB::select('select * from users');
      
        /*$data = array();
        foreach($accounts as $user)
        {
            $subarray = array();
            $subarray[] = $row->id;
            $subarray[] = $row->name;
            $subarray[] = $row->username;
            $subarray[] = $row->password;
            $subarray[] = $row->rolelevel;
            $subarray[] = $row->roleid;
            $subarray[] = '<a href="javascript:void();" data-id="' . $row['id'] . '"  class="btn btn-info btn-sm editBtn" >Edit</a> 
                    <a href= "javascript:void();" data-id="' . $row['id'] . '" class ="btn btn-sm btn-danger btnDelete">Delete</a>'; 
            $data[] = $subarray;
        }
        $count = DB::select('select * from users')->count();
        $output = array(
            'data'=>$data,
            'draw'=> intval($request->draw),
            'recordsTotal' => $count,
        );*/
        return Datatables::of($accounts)
            ->addColumn('action', function($account)
            {
                return '<a href="javascript:void();" data-id="' . $row['id'] . '"  class="btn btn-info btn-sm editBtn" >Edit</a> 
                <a href= "javascript:void();" data-id="' . $row['id'] . '" class ="btn btn-sm btn-danger btnDelete">Delete</a>';

            })
            ->make(true);
    }
}
