@extends('layouts.auth')

@section('content')
<div class="card shadow-none pd-20 mx-auto wd-300 text-center bd-1 align-self-center mt-5">
    <h4 class="card-title mt-3 text-center">Human Resources</h4>
    <p class="text-center">Sing Up</p>


    <form action="{{ url('register_user') }}" method="post">
        {{csrf_field()}}
        <div class=" form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
            </div>
            <input class="form-control form-control-sm" value="{{ old('firstname') }}" name="firstname" placeholder="First name" type="text">
        </div>
        <p class="text-danger">{{$errors->first('firstname')}}</p>
        <div class=" form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
            </div>
            <input class="form-control form-control-sm" value="{{ old('lastname') }}" name="lastname" placeholder="Last name" type="text">
        </div>
        <p class="text-danger">{{$errors->first('lastname')}}</p>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text pd-x-9"> <i class="fa fa-envelope"></i> </span>
            </div>
            <input class="form-control form-control-sm" value="{{ old('email') }}" name="email" placeholder="Email address" type="email" onblur="duplicateEmail(this)">
        </div>
        <p class="text-danger duplicate_message">{{$errors->first('email')}}</p>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
            </div>
            <input class="form-control form-control-sm" value="{{ old('phone') }}" name="phone" placeholder="Phone number" type="text">
        </div>
        <p class="text-danger">{{$errors->first('phone')}}</p>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
            </div>
            <input class="form-control form-control-sm" name="password" placeholder="Create password" type="password">
        </div>
        <p class="text-danger">{{$errors->first('password')}}</p>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
            </div>
            <input class="form-control form-control-sm" name="confirm_password" placeholder="Repeat password" type="password">
        </div>
        <p class="text-danger">{{$errors->first('confirm_password')}}</p>
        <div class="form-group">
            <button type="submit" class="btn btn-custom-primary btn-block tx-13"> Create Account </button>
        </div>

        <p class="text-center">Already Singed Up? <a href="{{url('/')}}">Sing In</a> </p>
    </form>
</div>
<script type="text/javascript">
    function duplicateEmail(element) {
        var email = $(element).val();
        //alert(email);
        $.ajax({
            type: "POST",
            url: '{{ url('checkemail') }}',
            data: {
                email: email,
                _token: "{{ csrf_token() }}"
            },
            dataType: "json",
            success: function(res) {
                if (res.exists) {
                    $('.duplicate_message').html('The email is already taken, try another');
                } else {
                    $(".duplicate_message").html("")
                }
            },
            error: function(jqXHR, exception) {

            }

        });
    }
</script>
@endsection