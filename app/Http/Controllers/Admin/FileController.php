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

    public function leaveform()
    {
        return view('admin.files.leaveform');
    }
}
