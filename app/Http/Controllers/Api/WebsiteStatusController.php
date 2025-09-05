<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Website;
use Illuminate\Http\Request;

class WebsiteStatusController extends Controller
{
    public function status()
    {

        $websites = Website::all();
        return response()->json($websites);
    }
}
