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
        /** @var \App\Models\User $user */
        $user = auth()->user();
        $data = $this->dashboardService->getData($user);

        return view('user.dashboard', $data);
    }
}
