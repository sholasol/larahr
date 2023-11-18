<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $data['getRecord'] = User::getRecord();
        // $employees = User::all();
        return view('backend.employees.list', $data);
    }

    public function create()
    {
        return view('backend.employees.create_employee');
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
}
