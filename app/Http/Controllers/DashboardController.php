<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

final class DashboardController
{
    public function index(Request $request): Response
    {
        return Inertia::render(
            component: 'Dashboard/Index'
        );
    }
}
