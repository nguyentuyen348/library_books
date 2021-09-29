@extends('layouts.app')
@section('title','create book')
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
                            <h3 class="card-title">Thêm mới sách</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="" class="form" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <lable>Tên</lable><strong class="text-danger">*</strong>
                                    <input type="text" value="{{ old('name') }}" class="form-control @error('name') is-invalid  @enderror" name="name">
                                    @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <lable>Ảnh </lable><strong class="text-danger">*</strong>
                                    <input type="file" value="{{ old('image') }}" class="form-control @error('image') is-invalid  @enderror" name="image">
                                    @error('image')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <lable>Tác giả</lable><strong class="text-danger">*</strong>
                                    @if(isset($authors) )
                                        <select class="form-control @error('author') is-invalid @enderror" id="" name="author_id">
                                            <option>select author</option>
                                            @foreach($authors as $author)
                                                <option value="{{$author->id}}">{{$author->name}}</option>
                                            @endforeach
                                        </select>
                                    @endif
                                    <a href="{{route('authors.create')}}">thêm thể tác giả</a>
                                </div>
                                <div class="form-group">
                                    <lable>Thể loại</lable><strong class="text-danger">*</strong>
                                    @if(isset($categories) )
                                        <select class="form-control @error('category') is-invalid @enderror" id="" name="category_id">
                                            <option>select category</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    @endif
                                    <a href="{{route('categories.create')}}">thêm thể loại</a>
                                </div>
                                <div class="form-group">
                                    <lable>Giá</lable><strong class="text-danger">*</strong>
                                    <input type="text" value="{{ old('price') }}" class="form-control @error('price') is-invalid  @enderror" name="price">
                                    @error('price')
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
