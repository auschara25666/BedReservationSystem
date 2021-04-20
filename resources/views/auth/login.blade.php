@extends('layouts.app-login')

@section('content')
<form class="form-signin" action="{{ route('login') }}" method="post">
    @csrf
    <div class="text-center mb-4">
        <img class="mb-4" src="{{ asset('image/logofontblack.png') }}" alt="" style="width: 100%;border-radius:5px;">
        <h1 class="h5 mb-3 font-weight-normal">เข้าสู่ระบบเพื่อใช้งาน</h5>
    </div>

    {{-- @if ($errors->any())
    <div id="ERROR_COPY" style="display:none;" class="alert alert-danger">
            @foreach ($errors->all() as $error)
            {{ $error }}<br/>
            @endforeach
            
    </div>
    @endif --}}
    @if($errors->any())
    {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
@endif



    <div class="form-label-group">
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required
            autofocus>
        <label for="inputEmail">Email address</label>
        <span class="form-control-feedback" ><i class="fas fa-envelope"></i></span>
    </div>

    <div class="form-label-group">
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Password</label>
        <span class="form-control-feedback" ><i class="fas fa-key"></i></span>
    </div>

    <div class="checkbox mb-3" style="margin-top: 10px;">
        <label>
        </label>
    </div>
    <button class="btn btn-lg btn-info btn-block" type="submit"><i class="fas fa-lock"></i> เข้าสู่ระบบ</button>

    <div class="text-center mb-4" style="margin-top: 10px;">
        <p class="text-inverse" style="font-size: 20px;"><a href="{{ route('register') }}" style="color:#17a2b8;">
                <b >สมัครสมาชิก <i class="fas fa-long-arrow-alt-right"></i></b></a></p>
    </div>
 
</form>


@endsection
