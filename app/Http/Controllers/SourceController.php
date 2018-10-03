<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SourceController extends Controller
{
    /**
     * Show sources
     *
     * @return Response
     */
    public function show()
    {
        return view('sources');
    }
}
