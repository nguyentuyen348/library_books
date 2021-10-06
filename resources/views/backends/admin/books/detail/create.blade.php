@extends('layouts.app')
@section('title','create category')
@section('content')
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
                            <h3 class="card-title">Tạo chi tiết sách</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{route('books.detail.store')}}" class="form" method="post">
                                @csrf


                                <div class="form-group">
                                    <lable>public_date</lable><strong class="text-danger">*</strong>
                                    <input type="date" value="{{$detail_book->date}}" class="form-control @error('public_date') is-invalid  @enderror" name="public_date">
                                    @error('public_date')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <lable>description</lable><strong class="text-danger">*</strong>
                                    <textarea rows="4" value="{{$detail_book->description}}" cols="50" class="form-control @error('description') is-invalid  @enderror" name="description">
                                    </textarea>
                                    @error('description')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <lable>content</lable><strong class="text-danger">*</strong>
                                    <textarea rows="4" cols="50" class="form-control @error('content') is-invalid  @enderror" name="content_book">
                                    </textarea>
                                    @error('content_book')
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

