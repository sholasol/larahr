<?php

namespace App\Http\Controllers\backend;

use App\Models\Jobs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
    public function index(Request $request)
    {
        $jobsModel = new Jobs(); // Create an instance of the Jobs model
        $data['getJob'] = $jobsModel->getJob($request);

        return view('backend.jobs.list', $data);
    }

    public function create_job()
    {
        return view('backend.jobs.create_job');
    }

    public function createJob(Request $request)
    {

        $job = request()->validate([
            'job_title' => 'required',
            'min_salary' => 'required',
            'max_salary' => 'required'
        ]);

        $job = new Jobs();

        $job->job_title = trim($request->job_title);
        $job->min_salary = trim($request->min_salary);
        $job->max_salary = trim($request->max_salary);
        $job->save();

        return redirect('admin/jobs')->with('success', 'Job created successfully');
    }

    public function editJob($id)
    {
        $data['getJob'] = Jobs::find($id);
        return view('backend.jobs.edit', $data);
    }

    public function updateJob($id, Request $request)
    {
        $job = request()->validate([
            'job_title' => 'required',
            'min_salary' => 'required',
            'max_salary' => 'required'
        ]);

        $job = Jobs::find($id);

        $job->job_title = trim($request->job_title);
        $job->min_salary = trim($request->min_salary);
        $job->max_salary = trim($request->max_salary);
        $job->save();

        return redirect('admin/jobs')->with('success', 'Job updated successfully');
    }

    public function deleteJob($id)
    {
        $job = Jobs::find($id);
        $job->delete();

        return redirect('admin/jobs')->with('error', 'Job deleted successfully');
    }
}
