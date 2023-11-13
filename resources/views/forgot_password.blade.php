@extends('layouts.auth')

@section('content')
<div class="card shadow-none pd-20 mx-auto wd-300 text-center bd-1 align-self-center mt-5">
    <h4 class="card-title mt-3 text-center">Human Resources</h4>
    <p class="text-center">Forgot Password</p>
    <p>
        <a href="" class="btn btn-block btn-twitter tx-13 hover-white"> <i class="fa fa-twitter"></i> Login via
            Twitter</a>
        <a href="" class="btn btn-block btn-facebook tx-13 hover-white"> <i class="fa fa-facebook-f"></i> Login
            via facebook</a>
    </p>
    <p class="divider-text">
        <span class="bg-light">OR</span>
    </p>

    <form>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text pd-x-9"> <i class="fa fa-envelope"></i> </span>
            </div>
            <input class="form-control form-control-sm" placeholder="Email address" type="email">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-custom-primary btn-block tx-13 hover-white"> Send Request</button>
        </div>
        <p class="text-center">Already have an account?<br /> <a href="{{url('/')}}">Login</a> </p>
    </form>
</div>
@endsection