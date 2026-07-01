<?php

namespace App\Http\Controllers;

use App\Services\UserDashboardService;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __construct(
        private readonly UserDashboardService $dashboardService,
    ) {}

    public function index(): View
    {
        $data = $this->dashboardService->getData(auth()->user());

        return view('user.dashboard', $data);
    }
}
