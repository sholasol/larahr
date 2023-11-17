<div class="page-sidebar-inner">
    <div class="page-sidebar-menu">
        <ul class="accordion-menu">
            <!-- <li class="open active">
                <a href=""><i data-feather="home"></i>
                    <span>Dashboard</span><span class="badge badge-info ft-right">Hot</span></a>
            </li> -->
            <li class="@if(Request::segment(2) =='dashboard') active @endif">
                <a href="{{ url('admin/dashboard') }}"><i data-feather="home"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="@if(Request::segment(2) =='employees') active @endif">
                <a href="{{ url('admin/employees') }}"><i data-feather="users"></i>
                    <span>Employees</span></a>
            </li>
            <li>
                <a href=""><i data-feather="database"></i>
                    <span>Jobs</span><span class="badge badge-warning ft-right">10+</span></a>
                <ul class="sub-menu">
                    <li class="@if(Request::segment(2) =='jobs') active @endif"><a href="{{url('admin/jobs')}}">Jobs</a>
                    </li>
                    <li class="@if(Request::segment(2) =='job_history') active @endif"><a
                            href="{{url('admin/job_history')}}">Job History </a></li>
                    <li class="@if(Request::segment(2) =='grade') active @endif"><a href="{{url('admin/grade')}}">Job
                            Grade </a></li>
                </ul>
            </li>
            <li class="@if(Request::segment(2) =='department') active @endif">
                <a href="{{ url('admin/department') }}"><i data-feather="home"></i>
                    <span>Department</span></a>
            </li>
            <li class="@if(Request::segment(2) =='country') active @endif">
                <a href="{{ url('admin/country') }}"><i data-feather="globe"></i>
                    <span>Country</span></a>
            </li>
            <li class="@if(Request::segment(2) =='location') active @endif">
                <a href="{{ url('admin/location') }}"><i data-feather="compass"></i>
                    <span>Location</span></a>
            </li>
            <li class="@if(Request::segment(2) =='region') active @endif">
                <a href="{{ url('admin/region') }}"><i data-feather="map"></i>
                    <span>Regions</span></a>
            </li>
        </ul>
    </div>
</div>