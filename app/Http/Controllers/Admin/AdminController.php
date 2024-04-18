<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Applicationforleave;

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
            return view('admin.dashboard.index', compact('users', 'applicationforleaves'));
        }
    }
}

