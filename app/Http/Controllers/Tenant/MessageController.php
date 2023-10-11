<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $title = 'Messages - Desa ' . ucwords(tenant('name')) ;
        $messages = auth()->user()->tenant
            ->messages()
            ->filter(request())
            ->latest()
            ->paginate(request()->row ?? 10);

        $data = [
            'title'    => $title,
            'messages' => $messages,
        ];

        return view('pages.tenant.message.index', $data);
    }
}
