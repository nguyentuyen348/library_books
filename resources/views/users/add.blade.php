@extends('layouts.app')
@section('title', 'Thêm mới người dùng')
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
                            <h3 class="card-title">Thêm mới người dùng</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('users.store') }}" class="form" method="post">
                                @csrf
                                <div class="form-group">
                                    <lable>Tên</lable>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="form-group">
                                    <lable>Email</lable>
                                    <input type="email" class="form-control" name="email">
                                </div>
                                <div class="form-group">
                                    <lable>Mật khẩu</lable>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <button type="submit" class="btn btn-primary">Lưu</button>
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
