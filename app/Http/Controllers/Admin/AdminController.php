<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Applicationforleave;
use App\Models\Certificateofappearance;
use App\Models\Dispatch;
use App\Models\Locator;
use App\Models\Travelorder;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();

            $users = User::count();
            $applicationforleaves = Applicationforleave::count();
            $certificateofappearances = Certificateofappearance::count();
            $dispatches = Dispatch::count();
            $locators = Locator::count();
            $travelorders = Travelorder::count();
            return view('admin.dashboard.index', compact('users', 'applicationforleaves', 'certificateofappearances', 'dispatches', 'locators', 'travelorders'));
        }
    }
}

