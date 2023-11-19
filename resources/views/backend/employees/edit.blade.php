@extends('layouts.admin')

@section('content')


<div id="main-wrapper">
    <!--================================-->
    <!-- Breadcrumb Start -->
    <!--================================-->
    <div class="pageheader pd-t-25 pd-b-35">
        <div class="pd-t-5 pd-b-5">
            <h1 class="pd-0 mg-0 tx-20 text-overflow">Edit Employees </h1>
        </div>
        <div class="breadcrumb pd-0 mg-0">
            <a class="breadcrumb-item" href="{{ url('admin/dashboard') }}"><i class="icon ion-ios-home-outline"></i>
                Home</a>
            <span class="breadcrumb-item active">Edit Employee</span>
        </div>
    </div>
    <!--/ Breadcrumb End -->
    <div class="row row-xs clearfix">

        <div class="col-md-12 col-lg-12">
            <div class="card mg-b-20">
                <div class="card-header">
                    <h4 class="card-header-title">
                        Edit Employee
                    </h4>
                    <a href="{{ url('admin/employees') }}" class="fa fa-refresh text-primary"> Back
                    </a>

                </div>
                <div class="col-md-12 col-lg-12">
                    <div class="card mg-b-20">
                        <div class="card-header">
                            <h4 class="card-header-title">
                                Edit Employee
                            </h4>
                            <div class="card-header-btn">
                                <a href="" data-toggle="remove" class="btn card-remove"><i
                                        class="ion-android-close"></i></a>
                            </div>
                        </div>
                        <form method="post" action="{{ url('admin/employees/edit/'.$getRecord->id) }}"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class=" card-body collapse show" id="collapse2">
                                <div class="form-layout form-layout-2">
                                    <div class="row no-gutters">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label active">Firstname: <span
                                                        class="tx-danger">*</span></label>
                                                <input class="form-control" type="text" name="firstname"
                                                    placeholder="Enter firstname" value="{{$getRecord->firstname }}">
                                                <p class="text-danger">{{$errors->first('firstname')}}
                                                </p>
                                            </div>

                                        </div>
                                        <!-- col-4 -->
                                        <div class="col-md-6 mg-t--1 mg-md-t-0">
                                            <div class="form-group mg-md-l--1">
                                                <label class="form-control-label active">Lastname: <span
                                                        class="tx-danger">*</span></label>
                                                <input class="form-control" type="text" name="lastname"
                                                    placeholder="Enter lastname" value="{{$getRecord->lastname }}">
                                                <p class="text-danger">{{$errors->first('lastname')}}
                                                </p>
                                            </div>

                                        </div>
                                        <!-- col-4 -->
                                        <div class="col-md-4 mg-t--1 mg-md-t-0">
                                            <div class="form-group mg-md-l--1">
                                                <label class="form-control-label active">Email address: <span
                                                        class="tx-danger">*</span></label>
                                                <input class="form-control" type="text" name="email"
                                                    placeholder="Enter email address" value="{{$getRecord->email }}"
                                                    onblur="checkEmail(this)">
                                                <p class="text-danger duplicate_message">{{$errors->first('email')}}</p>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-control-label active">Phone: <span
                                                        class="tx-danger">*</span></label>
                                                <input class="form-control" type="text" name="phone"
                                                    placeholder="Enter Phone" value="{{$getRecord->phone }}">
                                                <p class="text-danger">{{$errors->first('phone')}}</p>
                                            </div>

                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group mg-md-l--1 bd-t-0-force">
                                                <label class="form-control-label mg-b-0-force">Role: <span
                                                        class="tx-danger">*</span></label>
                                                <select id="select2-a" name="role"
                                                    class="form-control select2-hidden-accessible"
                                                    data-placeholder="Choose role" tabindex="-1" aria-hidden="true">
                                                    <option label="Choose role"></option>
                                                    <option value="0" selected="">User</option>
                                                    <option value="1">Is Admin</option>
                                                </select>
                                                <p class="text-danger">{{$errors->first('role')}}</p>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mg-md-l--1 bd-t-0-force">
                                                <label class="form-control-label mg-b-0-force">Job: <span
                                                        class="tx-danger">*</span></label>
                                                <select id="select2-a" name="job"
                                                    class="form-control select2-hidden-accessible"
                                                    data-placeholder="Choose job" tabindex="-1" aria-hidden="true">
                                                    <option label="Choose job"></option>
                                                    <option value="0" selected="">SWE</option>
                                                    <option value="1">HR</option>
                                                    <option value="2">PRO</option>
                                                </select>
                                                <p class="text-danger">{{$errors->first('job')}}</p>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-control-label active">Hired: <span
                                                        class="tx-danger">*</span></label>
                                                <input id="datePicker1" type="text" name="hired"
                                                    class="form-control datepicker-here" value="{{$getRecord->hired }}">
                                                <p class="text-danger">{{$errors->first('hired')}}</p>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-control-label active">Salary: <span
                                                        class="tx-danger">*</span></label>
                                                <input class="form-control" type="text" name="salary"
                                                    placeholder="Enter Salary" value="{{$getRecord->salary }}">
                                                <p class="text-danger">{{$errors->first('salary')}}
                                                </p>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-control-label active">Commission: <span
                                                        class="tx-danger">%</span></label>
                                                <input class="form-control" type="text" name="commission"
                                                    placeholder="Enter Commission" value="{{$getRecord->commission }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-control-label active">Department: <span
                                                        class="tx-danger">*</span></label>
                                                <input class="form-control" type="text" name="department"
                                                    placeholder="Enter Department" value="{{$getRecord->department }}">
                                                <p class="text-danger">
                                                    {{$errors->first('department')}}
                                                </p>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mg-md-l--1 bd-t-0-force">
                                                <label class="form-control-label mg-b-0-force">Manager: <span
                                                        class="tx-danger">*</span></label>
                                                <select id="select2-a" name="manager"
                                                    class="form-control select2-hidden-accessible"
                                                    data-placeholder="Choose manager" tabindex="-1" aria-hidden="true">
                                                    <option label="Choose manager"></option>
                                                    <option value="{{$getRecord->manager }}" selected="">
                                                        {{$getRecord->manager }}
                                                    </option>
                                                    <option value="1">Henry Wick</option>
                                                    <option value="2">Sam James</option>
                                                </select>
                                                <p class="text-danger">{{$errors->first('manager')}}
                                                </p>
                                            </div>

                                        </div>
                                        <!-- col-8 -->
                                    </div>
                                    <!-- row -->
                                    <div class="form-layout-footer bd pd-20 bd-t-0">
                                        <button type="submit" class="btn btn-custom-primary">Update Employee</button>
                                        <button type="rest" class="btn btn-secondary">Reset</button>
                                    </div>
                                    <!-- form-group -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Hoverable dataTable End -->


    </div>
</div>



@endsection