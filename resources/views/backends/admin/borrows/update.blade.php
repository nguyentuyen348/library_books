@extends('layouts.app')
@section('title','list borrows')
@section('content')
    <style>
        .hide{
            display: none;
        }
        .input-form{
            border: none;
        }
    </style>
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
                            <form action="{{route('borrows.update',$borrow->id)}}" method="post">
                                @csrf
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


                                    <tr>
                                        <td>
                                            {{$borrow->id}}
                                        </td>
                                        <td>
                                            @if($borrow->student)
                                                   {{$borrow->student->name}}
                                            @endif
                                        </td>
                                        <td>
                                            @if($borrow->student)
                                                <input class="input-form" type="text" value="{{$borrow->student->id}}" name="student_id">
                                            @endif
                                        </td>
                                        <td>

                                            @if($borrow->book)
                                                {{$borrow->book->name}}
                                            @endif

                                        </td>
                                        <td class="hide">
                                            @if($borrow->book)
                                                <input class="input-form hide" type="text" name="book_id" value=" {{$borrow->book->id}}">
                                            @endif
                                        </td>
                                        <td>
                                            @if($borrow->book)
                                                <img style="width: 100px;height: 140px" src="{{asset('storage/'.$borrow->book->image)}}" alt="">

                                            @endif
                                        </td>
                                        <td>
                                            <input class="input-form" type="text" value="{{$borrow->price_total}}" name="price_total">
                                        </td>
                                        <td>
                                            <input class="input-form" type="text" name="date_borrow" value="{{$borrow->date_borrow}}">
                                        </td>
                                        <td>
                                            <input class="input-form" type="text" name="date_return" value=" {{$borrow->date_return}}">
                                        </td>
                                        <td>

                                            <select name="status_id" id="status_id">
                                                @foreach($statuses as $status)
                                                <option value="{{$status->id}}">
                                                    {{$status->name}}
                                                </option>
                                                @endforeach
                                            </select>

                                        </td>
                                        <td>
                                           <button type="submit" class="btn-success">cập nhật</button>
                                        </td>
                                    </tr>
                                </tbody>


                                <tfoot>
                                <tr>

                                </tr>
                                </tfoot>
                            </table>
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

