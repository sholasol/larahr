<?php

namespace App\Http\Controllers\Backend;

use App\Models\Jobs;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $data['getRecord'] = User::getRecord($request);
        // $employees = User::all();
        return view('backend.employees.list', $data);
    }

    public function create()
    {
        $data['getJob']    = Jobs::get();
        return view('backend.employees.create_employee', $data);
    }

    public function createEmp(Request $request)
    {

        $user = request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:users',
            'phone' => 'required',
            'password' => 'required|min:6',
            'manager' => 'required',
            'job' => 'required',
            'role' => 'required',
            'hired' => 'required',
            'salary' => 'required',
            'department' => 'required'
        ]);


        $user = new User();
        $user->firstname = trim($request->firstname);
        $user->lastname = trim($request->lastname);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->remember_token = Str::random(50);
        $user->phone = trim($request->phone);
        $user->department = trim($request->department);
        $user->manager_id = trim($request->manager);
        $user->hired = trim($request->hired);
        $user->is_role = trim($request->role);
        $user->salary = trim($request->salary);
        $user->commission = trim($request->commission);
        $user->job_id = trim($request->job);
        $user->save();

        return redirect('admin/employees')->with('success', 'Employee created successfully');
    }

    public function chekEmpExists(Request $request)
    {
        $empEmail = $request->input('email');

        $empExists = User::where('email', $empEmail)->first();

        if ($empExists) {
            return response()->json(array("exists" => true));
        } else {
            return response()->json(array("exists" => false));
        }
    }

    public function viewEmployee($id)
    {
        $data['getRecord'] = User::find($id);
        return view('backend.employees.view', $data);
    }

    public function editEmployee($id)
    {
        $data['getRecord'] = User::find($id);
        $data['getJob']    = Jobs::get();

        return view('backend.employees.edit', $data);
    }

    public function updateEmployee($id, Request $request)
    {
        $user = request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'manager' => 'required',
            'job' => 'required',
            'role' => 'required',
            'hired' => 'required',
            'salary' => 'required',
            'department' => 'required'
        ]);

        $user = User::find($id);
        $user->firstname = trim($request->firstname);
        $user->lastname = trim($request->lastname);
        $user->email = trim($request->email);
        $user->phone = trim($request->phone);
        $user->department = trim($request->department);
        $user->manager_id = trim($request->manager);
        $user->hired = trim($request->hired);
        $user->is_role = trim($request->role);
        $user->salary = trim($request->salary);
        $user->commission = trim($request->commission);
        $user->job_id = trim($request->job);
        $user->save();

        return redirect('admin/employees')->with('success', 'Employee updated successfully');
    }

    public function deleteEmployee($id)
    {
        $deleteEmployee = User::find($id);
        $deleteEmployee->delete();

        return redirect('admin/employees')->with('error', 'Employee deleted successfully');
    }
}
