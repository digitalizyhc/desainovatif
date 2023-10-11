<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function index()
    {
        $messages = auth()->user()
            ->messages()
            ->filter(request())
            ->latest()
            ->paginate(request()->row ?? 10);

        return view('pages.admin.message.index', compact('messages'));
    }
}
