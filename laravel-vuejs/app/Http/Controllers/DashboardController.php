<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Inertia\Inertia;

//Alias Task 1 Do not forget to run seeder

class DashboardController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Dashboard', [
            'client' => Client::with('worker', 'orders')->find(1)
        ]);
    }
}
