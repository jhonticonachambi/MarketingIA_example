<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Home extends BaseController{

    public function index(){

        $facebook_app_id = "834448734847810";
        $facebook_app_secret = "834448734847810";
        $facebook_graph_version = "v12.0";
        $facebook_page_id = "282322188555210";


        return view();
    }
}