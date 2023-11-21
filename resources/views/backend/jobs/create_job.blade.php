@extends('layouts.admin')

@section('content')


<div id="main-wrapper">
    <!--================================-->
    <!-- Breadcrumb Start -->
    <!--================================-->
    <div class="pageheader pd-t-25 pd-b-35">
        <div class="pd-t-5 pd-b-5">
            <h1 class="pd-0 mg-0 tx-20 text-overflow">Create Job </h1>
        </div>
        <div class="breadcrumb pd-0 mg-0">
            <a class="breadcrumb-item" href="{{ url('admin/jobs') }}"><i class="icon ion-ios-home-outline"></i>
                Home</a>
            <span class="breadcrumb-item active">Create Job</span>
        </div>
    </div>
    <!--/ Breadcrumb End -->
    <div class="row row-xs clearfix">

        <div class="col-md-12 col-lg-12">
            <div class="card mg-b-20">
                <div class="card-header">
                    <h4 class="card-header-title">
                        Create New Job
                    </h4>
                    <a href="{{ url('admin/jobs') }}" class="fa fa-refresh text-primary"> Back
                    </a>

                </div>
                <div class="col-md-12 col-lg-12">
                    <div class="card mg-b-20">
                        <div class="card-header">
                            <h4 class="card-header-title">
                                Create Job
                            </h4>
                            <div class="card-header-btn">
                                <a href="" data-toggle="remove" class="btn card-remove"><i
                                        class="ion-android-close"></i></a>
                            </div>
                        </div>
                        <form method="post" action="{{ url('createJob') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class=" card-body collapse show" id="collapse2">
                                <div class="form-layout form-layout-2">
                                    <div class="row no-gutters">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-control-label active">Job Title: <span
                                                        class="tx-danger">*</span></label>
                                                <input class="form-control" type="text" name="job_title"
                                                    placeholder="Enter Title" value="{{ old('job_title') }}">
                                                <p class="text-danger">{{$errors->first('job_title')}}
                                                </p>
                                            </div>

                                        </div>
                                        <!-- col-4 -->
                                        <div class="col-md-6 mg-t--1 mg-md-t-0">
                                            <div class="form-group mg-md-l--1">
                                                <label class="form-control-label active">Min Salary: <span
                                                        class="tx-danger">*</span></label>
                                                <input class="form-control" type="number" name="min_salary"
                                                    placeholder="Enter Min Salary" value="{{ old('min_salary') }}">
                                                <p class="text-danger">{{$errors->first('min_salary')}}
                                                </p>
                                            </div>

                                        </div>
                                        <!-- col-4 -->
                                        <div class="col-md-6 mg-t--1 mg-md-t-0">
                                            <div class="form-group mg-md-l--1">
                                                <label class="form-control-label active">Max Salary: <span
                                                        class="tx-danger">*</span></label>
                                                <input class="form-control" type="number" name="max_salary"
                                                    placeholder="Enter Max Salary" value="{{ old('max_salary') }}">
                                                <p class="text-danger duplicate_message">
                                                    {{$errors->first('max_salary')}}
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- row -->
                                    <div class="form-layout-footer bd pd-20 bd-t-0">
                                        <button type="submit" class="btn btn-custom-primary">Create Job</button>
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