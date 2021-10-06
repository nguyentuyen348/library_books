@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<section class="content-header"1>
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">

            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Danh sách sách</li>
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
                            <a class="btn btn-success" href="{{ route('books.create') }}">Thêm mới</a>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên</th>
                                <th>Ảnh</th>
                                <th>Tác giả</th>
                                <th>Thể loại</th>
                                <th>Giá</th>
                                <th>Lượt xem</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($books as $book)

                                <tr>
                                    <td>{{ $book->id }}</td>
                                    <td>{{ $book->name }}</td>
                                    <td>
                                        <img style="width: 100px;height: 100px" src="{{asset('storage/'.$book->image)}}" alt="{{asset('storage/'.$book->image)}}">
                                    </td>

                                    <td>
                                        @if(isset($book->author))
                                            {{$book->author->name}}
                                        @endif
                                    </td>

                                    <td>
                                        @if(isset($book->category))
                                            {{$book->category->name}}
                                        @endif
                                    </td>
                                    <td>{{$book->price}}</td>
                                    <td>{{$book->view}}</td>
                                    <td>
                                        <a href="{{route('books.edit',$book->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                        <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        <a class="btn btn-success" href="{{route('books.detail',$book->id  )}}">detail</a>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach

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
