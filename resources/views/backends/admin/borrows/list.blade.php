@extends('layouts.app')
@section('title','list borrows')
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
                        <li class="breadcrumb-item active">Danh sách phiếu mượn</li>
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
                                <a class="btn btn-success" href="{{ route('borrows.create') }}">Thêm mới</a>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên người mượn</th>
                                    <th>ID người mượn</th>
                                    <th>Tên sách mượn</th>
                                    <th>Ảnh</th>
                                    <th>Số tiền đã thanh toán</th>
                                    <th>Ngày mượn</th>
                                    <th>Ngày trả</th>
                                    <th>Trạng thái</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($borrows as $borrow)

                                    <tr>
                                        <td>{{$borrow->id}}</td>
                                        <td>
                                            @if($borrow->student)
                                            {{$borrow->student->name}}
                                                @endif
                                        </td>
                                        <td>
                                            @if($borrow->student)
                                                {{$borrow->student->id}}
                                            @endif
                                        </td>
                                        <td>

                                            @if($borrow->book)
                                                {{$borrow->book->name}}
                                            @endif

                                        </td>
                                        <td>
                                      @if($borrow->book)
                                            <img style="width: 100px;height: 140px" src="{{asset('storage/'.$borrow->book->image)}}" alt="">

                                           @endif
                                        </td>
                                        <td>
                                            {{$borrow->price_total}}
                                        </td>
                                        <td>{{$borrow->date_borrow}}</td>
                                        <td>{{$borrow->date_return}}</td>
                                        <td>
                                                @if($borrow->status)
                                                {{$borrow->status->name}}
                                                @endif
                                        </td>
                                        <td>
                                            <a href="{{route('borrows.edit',$borrow->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                            <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>

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

