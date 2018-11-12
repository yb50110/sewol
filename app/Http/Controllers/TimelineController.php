<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Timeline;

class TimelineController extends Controller
{
    /**
     * Show timeline
     *
     * @return Response
     */
    public function show()
    {
        return view('timeline');
    }
}
