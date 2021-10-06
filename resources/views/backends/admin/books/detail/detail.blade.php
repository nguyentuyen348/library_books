@extends('layouts.app')
@section('title','detail')
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
                        <li class="breadcrumb-item active">detail </li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div>

    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <a class="btn btn-success" href="{{ route('books.detail.edit',$detail_book->id) }}">Sửa chi tiết </a>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <p><span>tác giả : </span>{{ $book->name}}</p>
                            <hr>
                            <div>
                                <img style="width: 100px;height: 100px" src="{{asset('storage/'.$book->image)}}" alt="">
                            </div>
                            <hr>
                            <p><span>Ngày xuất bản: </span>{{ $detail_book->public_date}}</p>
                            <hr>
                            <p><span>Mô tả: </span>{{ $detail_book->description}}</p>
                            <hr>
                            <p><span>Nội dung: </span>{{ $detail_book->content}}</p>

                            <p><span>View: </span>{{ $book->view }}</p>
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

