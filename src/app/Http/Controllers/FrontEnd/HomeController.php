<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Request;

class HomeController extends BaseController
{

    public function index(Request $request)
    {
        return view('page.home.index');
    }

}