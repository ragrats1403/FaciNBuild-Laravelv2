<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

protected function authenticated($roleid, $user)
{
    if ($user->roleid == 1)
    {
        //redirect to userdashboard
        return redirect('/userdashboard');
    }

    //to be added: Department Head,Sao,PCO
    else if($user->roleid == 2)
    {
        //redirect to admin dashboard
        return redirect('/admindashboard');
    }
    else
    {
        //return to login page
        return redirect('/');
    }
}