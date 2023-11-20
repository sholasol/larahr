@extends('layouts.admin')

@section('content')

<div id="main-wrapper">
    <!--================================-->
    <!-- Breadcrumb Start -->
    <!--================================-->
    <div class="pageheader pd-t-25 pd-b-35">
        <div class="pd-t-5 pd-b-5">
            <h1 class="pd-0 mg-0 tx-20 text-overflow">Job List</h1>
        </div>
        <div class="breadcrumb pd-0 mg-0">
            <a class="breadcrumb-item" href="{{ url('admin/dashboard') }}"><i class="icon ion-ios-home-outline"></i>
                Home</a>
            <span class="breadcrumb-item active">Jobs</span>
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
                        Job List
                    </h4>
                    <a href="{{ url('admin/create_employee') }}" class="fa fa-plus-circle text-primary"> Add Job
                    </a>

                </div>
                <div class="card-body collapse show" id="collapse5">
                    @include('_message')
                    <!-- <table id="hoverTable" class="table hover responsive nowrap"> -->
                    <table class="table hover responsive nowrap">

                        <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th>Job</th>
                                <th>Min Salary</th>
                                <th>Max Salary</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>3</td>
                                <td>ttt</td>
                                <td>tttyyy</td>
                                <td>fbbbh</td>
                                <td>
                                    <a href="" class="fa fa-eye text-primary"></a>
                                    <a href="" class="fa fa-edit text-success"></a>
                                    <a href="" class="fa fa-trash text-danger"
                                        onclick="return confirm('Are you sure you want to delete this employee?')"></a>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th width="5%">#</th>
                                <th>Job</th>
                                <th>Min Salary</th>
                                <th>Max Salary</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection