<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Notifications\MessegeSentNotification;
use Illuminate\Http\Request;

class SendMessageController extends Controller
{
    public function send()
    {
        $data = request()->validate([
            'name' => ['required', 'string', 'max:55', 'min:2'],
            'tel' => ['required', 'string', 'min:7'],
            'message' => ['required', 'string', 'min:55', 'max:255']
        ]);
        Admin::all()->each->notify(new MessegeSentNotification($data));
        return to_route('main');
    }

    public function mark_as_read()
    {
        request()->validate([
            'id' => 'required'
        ]);
        auth()->guard('admin')->user()->notifications->where('id', request()->id)->markAsRead();
        return back();
    }
}
