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
    public function index()
    {
        $messages_items = Message::all();

        return view('messages', compact('messages_items'));
    }

    /**
     * Get a specific message
     */
    public function show($message_id)
    {
        $message = Message::find($message_id);
        return $message;
    }

    /**
     * Store new message
     */
    public function store(MessageRequest $request)
    {
        $message = Message::create([
            'text' => $request['text'],
        ]);
        return $message;
    }
}
