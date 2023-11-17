@extends('layouts.admin')

@section('content')
<div id="main-wrapper">
    <!--================================-->
    <!-- Breadcrumb Start -->
    <!--================================-->
    <div class="pageheader pd-t-25 pd-b-35">
        <div class="pd-t-5 pd-b-5">
            <h1 class="pd-0 mg-0 tx-20 text-overflow">Employees List</h1>
        </div>
        <div class="breadcrumb pd-0 mg-0">
            <a class="breadcrumb-item" href="{{ url('admin/dashboard') }}"><i class="icon ion-ios-home-outline"></i>
                Home</a>
            <span class="breadcrumb-item active">Employees</span>
        </div>
    </div>
    <!--/ Breadcrumb End -->
    <div class="row row-xs clearfix">

        <div class="col-md-12 col-lg-12">
            <div class="card mg-b-20">
                <div class="card-header">
                    <h4 class="card-header-title">
                        Employees List
                    </h4>
                    <a href="{{ url('admin/create_employee') }}" class="fa fa-plus-circle text-primary"> Add
                    </a>

                </div>
                <div class="card-body collapse show" id="collapse5">
                    @include('_message')
                    <table id="hoverTable" class="table hover responsive nowrap">

                        <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Department</th>
                                <th>Salary</th>
                                <th>Hired</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $key => $emp)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>
                                    <img src=" {{ url('public/assets/images/avatar/avatar1.png')}}" class="img-fluid wd-35 ht-35 rounded-circle" alt="">
                                    {{$emp->firstname}}, {{$emp->lastname}}
                                </td>
                                <td>{{$emp->email}}</td>
                                <td>{{$emp->phone}}</td>
                                <td>{{$emp->department}}</td>
                                <td>{{$emp->salary}}</td>
                                <td>{{$emp->hired}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Department</th>
                                <th>Salary</th>
                                <th>Hired</th>
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