@extends('layouts.app')
@section('title','Danh sách sinh viên')
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
                        <li class="breadcrumb-item active">Danh sách sinh viên</li>
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
                            <h3 class="card-title">
                                <a class="btn btn-success" href="{{ route('students.create') }}">Thêm mới</a>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên</th>
                                    <th>Avatar</th>
                                    <th>Mã sinh viên</th>
                                    <th>Email</th>
                                    <th>Số điện thoại</th>
                                    <th>Địa chỉ</th>
                                    <th></th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $key => $student)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $student->name }}</td>
                                        <td>
                                            <img style="width: 100px;height: 100px" src="{{asset('storage/'.$student->avatar)}}" alt="{{asset('storage/'.$student->avatar)}}">
                                        </td>
                                        <td>{{ $student->student_code }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ $student->phone }}</td>
                                        <td>{{ $student->address }}</td>
                                        <td>
                                            <a href="{{route('students.edit',$student->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                            <a href="{{route('students.delete',$student->id)}}" onclick="return confirm('are you sure?')" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>

                                </tr>
                                </tfoot>
                            </table>
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
