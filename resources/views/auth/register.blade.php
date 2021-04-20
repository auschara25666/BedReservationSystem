@extends('layouts.app-resister')

@section('content')

<form class="form-signup" name="myform" id="regisform" method="POST" action="{{ route('register') }}">
    @csrf
    <div class="text-center mb-2">
        <img class="mb-3" src="{{ asset('image/registerblack.png') }}" alt="" style="width: 100%;border-radius:5px;">
        {{-- <h1 class="h5 mb-3 font-weight-normal">เข้าสู่ระบบเพื่อใช้งาน</h5> --}}
    </div>
    @if($errors->any())
    {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
@endif

@if (session()->has('success'))
<div class="alert alert-success">
    @if(is_array(session('success')))
        <ul>
            @foreach (session('success') as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    @else
        {{ session('success') }}
    @endif
</div>
@endif

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="prefix" class="cols-sm-2 control-label">คำนำหน้า <label style="color: red;">*</label></label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <div class="input-group-append" style="margin-right: -1px;margin-left: 0px;">
                        <div class="input-group-text">
                            <span class="fa fa-user fa"></span>
                        </div>
                    </div>
                    <select class="form-control" name="prefix" id="prefix" required>
                        <option value="" style="display: none" selected disabled>..เลือกคำนำหน้า..</option>
                        @forelse ($prefix as $lprefix)
                            <option value="{{ $lprefix->prefix }}">{{ $lprefix->prefix }}</option>
                        @empty
                            
                        @endforelse
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="name" class="cols-sm-2 control-label">ชื่อจริง <label style="color: red;">*</label></label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <div class="input-group-append" style="margin-right: -1px;margin-left: 0px;">
                        <div class="input-group-text">
                            <span class="fa fa-user fa"></span>
                        </div>
                    </div>
                    <input type="text" class="form-control" name="fname" id="fname" placeholder="กรอกชื่อจริง" required/>
                </div>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="name" class="cols-sm-2 control-label">นามสกุล <label style="color: red;">*</label></label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <div class="input-group-append" style="margin-right: -1px;margin-left: 0px;">
                        <div class="input-group-text">
                            <span class="fa fa-user fa"></span>
                        </div>
                    </div>
                    <input type="text" class="form-control" name="lname" id="lname" placeholder="กรอกนามสกุล" />
                </div>
            </div>
        </div>
        <div class="form-group col-md-12">
            <label for="confirm" class="cols-sm-2 control-label">เบอร์โทรศัพท์ <label
                    style="color: red;">*</label></label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <div class="input-group-append" style="margin-right: -1px;margin-left: 0px;">
                        <div class="input-group-text">
                            <span class="fa fa-phone-alt"></span>
                        </div>
                    </div>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="กรอกเบอร์โทรศัพท์"
                        OnKeyPress="return chkNumber(this)" />
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email" class="cols-sm-2 control-label">อีเมล <label
                    style="color: red;font-size:13px">*&nbsp;(ใช้ @kku.ac.th เท่านั้น)</label></label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <div class="input-group-append" style="margin-right: -1px;margin-left: 0px;">
                        <div class="input-group-text">
                            <span class="fa fa-envelope fa"></span>
                        </div>
                    </div>
                    <input type="email" class="form-control" name="email" id="email" placeholder="กรอกอีเมล"
                        value="@kku.ac.th" />
                </div>

            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="password" class="cols-sm-2 control-label">รหัสผ่าน <label
                    style="color: red;font-size:13px">*&nbsp;รหัสผ่านอย่างน้อย 8 ตัว</label></label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <div class="input-group-append" style="margin-right: -1px;margin-left: 0px;">
                        <div class="input-group-text">
                            <span class="fa fa-lock fa-lg"></span>
                        </div>
                    </div>
                    <input type="password" class="form-control" name="password" id="password" minlength="8"
                        placeholder="กรอกรหัสผ่าน" />
                    <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="confirm" class="cols-sm-2 control-label">สถานะ <label style="color: red;">*</label></label>
        <div class="cols-sm-10">
            <div class="input-group">
                <div class="input-group-append" style="margin-right: -1px;margin-left: 0px;">
                    <div class="input-group-text">
                        <span class="fas fa-user-md"></span>
                    </div>
                </div>
                <select name="role" id="role" class="form-control" required>
                    <option style="display: none" value="">...เลือกสถานะ...</option>
                    @forelse ($role as $lrole)
                    <option value="{{ $lrole->id }}">{{ $lrole->role }}</option>
                    @empty

                    @endforelse
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="confirm" class="cols-sm-2 control-label">สังกัด <label style="color: red;">*</label></label>
        <div class="cols-sm-10">
            <div class="input-group">
                <div class="input-group-append" style="margin-right: -1px;margin-left: 0px;">
                    <div class="input-group-text">
                        <span class="fas fa-user-md"></span>
                    </div>
                </div>
                <select name="ward" id="ward" class="form-control" required>
                    <option style="display: none" value="">...เลือกสังกัด...</option>
                    @forelse ($ward as $lw)
                    <option value="{{ $lw->id }}">{{ $lw->ward_name }}</option>
                    @empty
                    <option value="" disabled>...ไม่มีข้อมูลสังกัด...</option>
                    @endforelse
                </select>
            </div>
        </div>
    </div>

    <p><span style="text-decoration: underline;">หมายเหตุ</span> <span style="color: red">*</span> จำเป็นต้องกรอก </p>
    <div class="form-group ">
        <button type="submit" id="btn-submit" class="btn btn-info btn-lg btn-block login-button"><i class="fas fa-user-plus"></i>
            ลงทะเบียน</button>
    </div>
    <div class="login-register">
        <a href="{{ route('login') }}" style="color:#17a2b8;"><i class="fas fa-long-arrow-alt-left"></i>
            กลับหน้าเข้าสู่ระบบ</a>
    </div>
</form>

<script>
    function chkNumber(ele) {
        var vchar = String.fromCharCode(event.keyCode);
        if ((vchar < '0' || vchar > '9') && (vchar != ',')) return false;
        ele.onKeyPress = vchar;
    }
</script>

@endsection
