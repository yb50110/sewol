<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Show messages
     *
     * @return Response
     */
    public function show()
    {
        return view('messages');
    }

    /**
     * Store new message
     */
    public function store()
    {

    }
}
