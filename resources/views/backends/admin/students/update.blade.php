@extends('layouts.app')
@section('title', 'Chỉnh sửa thông tin sinh vien')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Chỉnh sửa thông tin sinh viên</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="" class="form" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <lable>Tên</lable><strong class="text-danger">*</strong>
                                    <input type="text" value="{{$student->name}}" class="form-control @error('name') is-invalid  @enderror" name="name">
                                    @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <lable>Avatar</lable><strong class="text-danger"></strong>
                                    <input type="file" value="{{asset('storage/'.$student->avatar)}}" class="form-control @error('avatar') is-invalid  @enderror" name="avatar">
                                    <img style="width: 100px;height: 100px" src="{{asset('storage/'.$student->avatar)}}" alt="">
                                    @error('avatar')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <lable>Mã sinh viên</lable><strong class="text-danger">*</strong>
                                    <input type="text" value="{{$student->student_code}}" class="form-control @error('student_code') is-invalid  @enderror" name="student_code">
                                    @error('student_code')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <lable>Email</lable><strong class="text-danger">*</strong>
                                    <input type="email" value="{{$student->email}}" class="form-control @error('email') is-invalid  @enderror" name="email">
                                    @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <lable>Số điện thoại</lable><strong class="text-danger">*</strong>
                                    <input type="text" value="{{$student->phone}}" class="form-control @error('phone') is-invalid  @enderror" name="phone">
                                    @error('phone')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <lable>Địa chỉ</lable><strong class="text-danger">*</strong>
                                    <input type="text" value="{{$student->address}}" class="form-control @error('address') is-invalid  @enderror" name="address">
                                    @error('address')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Lưu</button>
                                <p>Trường <strong class="text-danger"> * </strong> là trường bắt buộc!</p>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
