<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobHistoryController extends Controller
{
    public function index()
    {
        return view('backend.job_history.list');
    }
}
