@extends('layouts.admin')

@section('content')
<div id="main-wrapper">
    <!--================================-->
    <!-- Breadcrumb Start -->
    <!--================================-->
    <div class="pageheader pd-t-25 pd-b-35">
        <div class="pd-t-5 pd-b-5">
            <h1 class="pd-0 mg-0 tx-20 text-overflow">Job History </h1>
        </div>
        <div class="breadcrumb pd-0 mg-0">
            <a class="breadcrumb-item" href="{{ url('admin/dashboard') }}"><i class="icon ion-ios-home-outline"></i>
                Home</a>
            <span class="breadcrumb-item active">Job History</span>
        </div>
    </div>
    <!--/ Breadcrumb End -->
    <div class="row row-xs clearfix">

        <div class="col-md-12 col-lg-12">
            <div class="card mg-b-20">
                <div class="card-header">
                    <h4 class="card-header-title">
                        Search
                    </h4>
                    <div class="card-header-btn">
                        <a href="" data-toggle="collapse" class="btn card-collapse" data-target="#collapse2"
                            aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                    </div>
                </div>
                <div class="card-body collapse show" id="collapse2">
                    <form action="">
                        <div class="d-flex wd-300">
                            <dciv class="form-group mg-b-0 mg-md-l-30 mg-t-20 mg-md-t-0">
                                <label>Enter Search: </label>
                                <input type="text" name="search" value="{{ Request()->search }}"
                                    class="form-control wd-150 wd-xs-250" placeholder="Enter Search">
                            </dciv>
                            <!-- form-group -->
                            <div class="mg-l-10 mg-t-25 pd-t-4">
                                <button type="submit" class="btn btn-custom-primary pd-y-8">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-lg-12">
            <div class="card mg-b-20">
                <div class="card-header">
                    <h4 class="card-header-title">
                        Job History
                    </h4>
                    <a href="{{ url('admin/create_employee') }}" class="fa fa-plus-circle text-primary"> Add Employee
                    </a>

                </div>
                <div class="card-body collapse show" id="collapse5">
                    @include('_message')
                    <!-- <table id="hoverTable" class="table hover responsive nowrap"> -->
                    <table class="table hover responsive nowrap">

                        <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Job</th>
                                <th>Department</th>
                                <!-- <th>Role</th> -->
                                <th>Salary</th>
                                <th>Commission (%)</th>
                                <th>Hired</th>
                                <th width="20%"></th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Job</th>
                                <th>Department</th>
                                <!-- <th>Role</th> -->
                                <th>Salary</th>
                                <th>Commission (%)</th>
                                <th>Hired</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
        <!--/ Hoverable dataTable End -->


    </div>
</div>

@endsection