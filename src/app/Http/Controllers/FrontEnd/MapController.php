<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Request;
use Route;

class MapController extends BaseController
{

    public function index(Request $request)
    {
        $data = [
            'routeRecordList' => Route::getRoutes()
        ];
        return view('page.map.index', $data);
    }

}