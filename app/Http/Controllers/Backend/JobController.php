<?php

namespace App\Http\Controllers\backend;

use App\Models\Jobs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
    public function index(Request $request)
    {
        $jobs = new Jobs();
        return view('backend.jobs.list');
    }
}