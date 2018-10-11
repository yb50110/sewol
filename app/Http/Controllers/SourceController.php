<?php

namespace App\Http\Controllers;

use App\Source;
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
        $source_items = Source::all();

        return view('sources', compact('source_items'));
    }
}
