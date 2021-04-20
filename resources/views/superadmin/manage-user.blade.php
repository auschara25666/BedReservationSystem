@extends('superadmin.layouts.app-admin')
@section('title','จัดการสมาชิก')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                {{-- <div class="col-sm-6">
                    <h1>สมาชิก (Admin ของแต่ละวอร์ด)</h1>
                </div> --}}
            </div>



        </div><!-- /.container-fluid -->
    </section>
    @if ($errors->any())
    <div class="alert alert-danger background-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
    @endif

    @if (session()->has('success'))
    <div class="alert alert-success background-success">
        {{ session()->get('success') }}
    </div><br />
    @endif
    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <!-- Default box -->
                    <div class="card">
                        {{-- <div class="card-header">

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                    data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"
                                    data-toggle="tooltip" title="Remove">
                                    <i class="fas fa-times"></i></button>
                            </div>
                        </div> --}}
                        <div class="card-body">
                            {{-- <div class="card-header">
                                <h4>ผู้ใช้</h4>
                            </div> --}}
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h2>สมาชิก (Admin ของแต่ละวอร์ด)</h2>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#addUser"
                                            style="float: right;">เพิ่มผู้ใช้</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="table_1" class="table table-hover">
                                        <thead class="table-primary">
                                            <tr style="text-align: center;">
                                                <th>ชื่อ</th>
                                                <th>อีเมล</th>
                                                <th>เบอร์</th>
                                                <th>ตำแหน่ง</th>
                                                <th>วอร์ด</th>
                                                <th>สถานะ</th>
                                                <th>แก้ไข / ลบ</th>
                                            </tr>
                                        </thead>
                                        @if (is_null($user))

                                        @else
                                        <tbody>
                                            @foreach ($user as $userlist)
                                            <tr>
                                                <td>{{ $userlist->name }}</td>
                                                <td>{{ $userlist->email }}</td>
                                                <td>{{ $userlist->phone }}</td>
                                                <td>{{ $userlist->role_id->role }}</td>
                                                <td>{{ $userlist->ward }}</td>
                                                <td>
                                                    @if ($userlist->rec_status == 1)
                                                    <span class="badge bg-success"
                                                        style="font-size: 16px">อนุมัติแล้ว</span>
                                                    @endif
                                                    @if ($userlist->rec_status == 0)
                                                    <span class="badge bg-danger"
                                                        style="font-size: 16px">ยังไม่อนุมัติ</span>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    <div class="btn-group btn-group-sm">
                                                        <a href="#editUser{{ $userlist->id }}" data-toggle="modal"
                                                            class="btn btn-warning">
                                                            <svg viewBox="0 0 24 24" width="24" height="24"
                                                                stroke="currentColor" stroke-width="2" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="css-i6dzq1">
                                                                <circle cx="12" cy="12" r="3">
                                                                </circle>
                                                                <path
                                                                    d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <a href="#delUser{{ $userlist->id }}" data-toggle="modal"
                                                            class="btn btn-danger">
                                                            <svg viewBox="0 0 24 24" width="24" height="24"
                                                                stroke="currentColor" stroke-width="2" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="css-i6dzq1">
                                                                <polyline points="3 6 5 6 21 6">
                                                                </polyline>
                                                                <path
                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            {{-- editUser --}}
                                            <div class="modal fade" aria-labelledby="myModalLabel"
                                                id="editUser{{ $userlist->id }}" tabindex="-1" role="dialog">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">

                                                        <form class="form-horizontal"
                                                            action="{{ route('manage-user.update',$userlist->id) }}"
                                                            method="post">
                                                            @csrf
                                                            {{ method_field('patch') }}
                                                            <div class="modal-header">
                                                                <h4 class="modal-title"><i class="fa fa-edit"></i>
                                                                    แก้ไขข้อมูลสมาชิก</h4>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close"><span
                                                                        aria-hidden="true">&times;</span></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="name"
                                                                        class="control-label"><b>ชื่อ-นามสกุล
                                                                            :</b></label>
                                                                    <input class="form-control" type="text" name="name"
                                                                        value="{{ $userlist->name }}" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="email" class="control-label"><b>อีเมล
                                                                            :</b></label>
                                                                    <input class="form-control" type="email"
                                                                        name="email" value="{{ $userlist->email }}"
                                                                        required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="phone"
                                                                        class="control-label"><b>เบอร์โทรศัพท์
                                                                            :</b></label>
                                                                    <input class="form-control" type="text" name="phone"
                                                                        OnKeyPress="return chkNumber(this)"
                                                                        maxlength="10" value="{{ $userlist->phone }}"
                                                                        required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="phone" class="control-label"><b>สถานะ
                                                                            :</b></label>
                                                                    <select class="form-control" name="rec_status">
                                                                        <option value="0"
                                                                            {{ $userlist->rec_status == '0' ? 'selected' : ''}}>
                                                                            ยังไม่อนุมัติ
                                                                        </option>
                                                                        <option value="1"
                                                                            {{ $userlist->rec_status == '1' ? 'selected' : ''}}>
                                                                            อนุมัติแล้ว</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="phone" class="control-label"><b>สิทธิ์
                                                                            :</b></label>
                                                                    <select class="form-control" name="role">
                                                                        @forelse ($role as $lrole)
                                                                        <option value="{{ $lrole->id }}"
                                                                            {{ $userlist->role == $lrole->id ? 'selected' : '' }}>
                                                                            {{ $lrole->role }} / ประเภท :
                                                                            {{ $lrole->role_type }}</option>
                                                                        @empty

                                                                        @endforelse
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="confirm"
                                                                        class="cols-sm-2 control-label">วอร์ด <label
                                                                            style="color: red;">*</label></label>
                                                                    <div class="cols-sm-10">
                                                                        <div class="input-group">
                                                                            <div class="input-group-append"
                                                                                style="margin-right: -1px;margin-left: 0px;">
                                                                                <div class="input-group-text">
                                                                                    <span class="fas fa-user-md"></span>
                                                                                </div>
                                                                            </div>
                                                                            <input type="text" class="form-control"
                                                                                name="ward" id="ward"
                                                                                value="{{ $userlist->ward }}"
                                                                                placeholder="กรอกสังกัด" list="wards" />
                                                                            <datalist id="wards">
                                                                                @forelse ($ward as $lward)
                                                                                <option value="{{ $lward->ward_name }}">
                                                                                    {{ $lward->ward_name }}</option>
                                                                                @empty

                                                                                @endforelse
                                                                            </datalist>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary"
                                                                    autocomplete="off"> <i
                                                                        class="glyphicon glyphicon-ok-sign"></i>บันทึก</button>
                                                                <button type="button" class="btn btn-warning"
                                                                    data-dismiss="modal"> <i
                                                                        class="glyphicon glyphicon-remove-sign"></i>
                                                                    ปิด</button>
                                                            </div> <!-- /modal-footer -->
                                                        </form> <!-- /.form -->
                                                    </div> <!-- /modal-content -->
                                                </div> <!-- /modal-dailog -->
                                            </div>
                                            {{-- /editUser --}}

                                            {{-- delUser --}}
                                            <div class="modal fade" aria-labelledby="myModalLabel"
                                                id="delUser{{ $userlist->id }}" tabindex="-1" role="dialog">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">

                                                        <form class="form-horizontal"
                                                            action="{{ route('manage-user.destroy',$userlist->id) }}"
                                                            method="post">
                                                            @csrf
                                                            {{ method_field('delete') }}
                                                            <div class="modal-header">
                                                                <h4 class="modal-title"><i class="fa fa-trash"></i>
                                                                    ลบผู้ใช้</h4>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close"><span
                                                                        aria-hidden="true">&times;</span></button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <h3>คุณต้องการลบผู้ใช้</h3>
                                                                <h5 style="color: red">
                                                                    {{ $userlist->name }}
                                                                </h5>
                                                                <h3>หรือไม่ ?</h3>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-danger"
                                                                    autocomplete="off">
                                                                    ลบ</button>
                                                                <button type="button" class="btn btn-primary"
                                                                    data-dismiss="modal">
                                                                    ปิด</button>
                                                            </div> <!-- /modal-footer -->
                                                        </form> <!-- /.form -->
                                                    </div> <!-- /modal-content -->
                                                </div> <!-- /modal-dailog -->
                                            </div>
                                            {{-- /delUser --}}
                                            @endforeach
                                        </tbody>
                                        @endif
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        {{-- <div class="card-footer text-right">
                            <button class="btn btn-lg btn-primary" data-toggle="modal"
                                data-target="#addUser">เพิ่มผู้ใช้</button>
                        </div> --}}
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

{{-- addUser --}}
<div class="modal fade" aria-labelledby="myModalLabel" id="addUser" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <form class="form-horizontal" action="{{ route('manage-user.store') }}" method="post">
                @csrf

                <div class="modal-header">
                    <h4 class="modal-title"><i class="fa fa-plus"></i> เพิ่มบัญชีผู้ใช้งาน</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="name" class="cols-sm-2 control-label">ชื่อ-นามสกุล <label
                                style="color: red;">*</label></label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <div class="input-group-append" style="margin-right: -1px;margin-left: 0px;">
                                    <div class="input-group-text">
                                        <span class="fa fa-user fa"></span>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="กรอกชื่อ-นามสกุล" required />

                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">อีเมล <label
                                style="color: red;">*</label></label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <div class="input-group-append" style="margin-right: -1px;margin-left: 0px;">
                                    <div class="input-group-text">
                                        <span class="fa fa-envelope fa"></span>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="email" id="email" placeholder="กรอกอีเมล"
                                    required />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="cols-sm-2 control-label">รหัสผ่าน <label
                                style="color: red;">*</label></label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <div class="input-group-append" style="margin-right: -1px;margin-left: 0px;">
                                    <div class="input-group-text">
                                        <span class="fa fa-lock fa-lg"></span>
                                    </div>
                                </div>
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="กรอกรหัสผ่าน" required />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="confirm" class="cols-sm-2 control-label">เบอร์โทรศัพท์ <label
                                style="color: red;">*</label></label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <div class="input-group-append" style="margin-right: -1px;margin-left: 0px;">
                                    <div class="input-group-text">
                                        <span class="fa fa-phone-alt"></span>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="phone" id="phone"
                                    OnKeyPress="return chkNumber(this)" maxlength="10" placeholder="กรอกเบอร์โทรศัพท์"
                                    required />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phone" class="control-label"><b>สิทธิ์
                                :</b></label>
                        <select class="form-control" name="role">
                            <option value="" style="display: none">..เลือกสิทธิ์ผู้ใช้..</option>
                            @forelse ($role as $lrole)
                            <option value="{{ $lrole->id }}">{{ $lrole->role }} / ประเภท :
                                {{ $lrole->role_type }}</option>
                            @empty

                            @endforelse
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="confirm" class="cols-sm-2 control-label">วอร์ด <label
                                style="color: red;">*</label></label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <div class="input-group-append" style="margin-right: -1px;margin-left: 0px;">
                                    <div class="input-group-text">
                                        <span class="fas fa-user-md"></span>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="ward" id="ward" placeholder="กรอกสังกัด"
                                    list="wards" />
                                <datalist id="wards">
                                    @forelse ($ward as $lward)
                                    <option value="{{ $lward->ward_name }}">
                                        {{ $lward->ward_name }}</option>
                                    @empty

                                    @endforelse
                                </datalist>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" autocomplete="off"> <i
                            class="glyphicon glyphicon-ok-sign"></i>สร้าง</button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal"> <i
                            class="glyphicon glyphicon-remove-sign"></i> ปิด</button>
                </div> <!-- /modal-footer -->
            </form> <!-- /.form -->
        </div> <!-- /modal-content -->
    </div> <!-- /modal-dailog -->
</div>
{{-- /addUser --}}


<script>
    function chkNumber(ele) {
    var vchar = String.fromCharCode(event.keyCode);
    if ((vchar < '0' || vchar > '9') && (vchar != '.')) return false;
    ele.onKeyPress = vchar;
}
</script>
@endsection
