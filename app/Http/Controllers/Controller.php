<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Session;
use DB;
use View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function redirectHomepage() 
    {
        $currentUser = Session::get('session-user');
        $dogs = DB::table('dogs')->where('user_id', $currentUser->id)->get();
        return View::make('homepage')->with('dogs', $dogs);
    }
}

