<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function file()
    {
        return view('admin.files.index');
    }

    public function applicationforleave()
    {
        return view('admin.files.applicationforleave');
    }
}
