<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Dashboard - Desa ' . ucwords(tenant('name'));
        $data = [
            'title' => $title
        ];
        return view('pages.tenant.dashboard.index', $data);
    }
}
