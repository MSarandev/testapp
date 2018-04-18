<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    // Main send method

    public function send(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');

        Mail::send('emails.send', ['title' => $title, 'content' => $content], function ($message)
        {

            $message->from(env("MAIL_FROM_ADDRESS", "admin@test.com"),
                env("MAIL_FROM_NAME", "Admin"));

            $message->to('maxsarandev@gmail.com');

        });

        return response()->json(['message' => 'Request completed']);
    }
}
