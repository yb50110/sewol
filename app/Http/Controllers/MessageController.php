<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;

class MessageController extends Controller
{
    /**
     * Show messages
     *
     * @return Response
     */
    public function show()
    {
        $messages_items = Message::all();

        return view('messages', compact('messages_items'));
    }

    /**
     * Store new message
     */
    public function store(MessageRequest $request)
    {
        Message::create([
            'text' => $request['text'],
        ]);
        return redirect()->route('messages');
    }
}
