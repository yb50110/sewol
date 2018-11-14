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
        $documentaries = Source::where('type', 'Documentary')->get();
        $news = Source::where('type', 'News')->get();
        $others = Source::where('type', 'Other')->get();

        return view('sources', compact('documentaries', 'news', 'others'));
    }
}
