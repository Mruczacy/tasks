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
        return Inertia::render('Task1', [
            'client' => Client::find(1)->clientInterview()
        ]);
    }
}
