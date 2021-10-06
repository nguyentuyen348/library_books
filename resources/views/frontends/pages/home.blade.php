@extends('layouts.master')
@section('title','library book')
@section('content')

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="container">
        <div>
            <h3 style="padding-left: 15px">List Books</h3>
        </div>

        @foreach($books as $book)

            <div class="col-sm-3">
                <div class="panel panel-primary">

                    <div class="panel-heading">{{$book->name}}</div>
                    <div class="panel-body" style=""><img src="{{asset('storage/'.$book->image)}}" class="img-responsive"
                                                          style="width:160px;height:180px" alt="{{asset('storage/'.$book->image)}}"></div>
                    <div class="panel-footer">{{$book->price}}</div>
                    <div>
                        <a href="{{route('pages.detailBook',$book->id)}}">
                            Xem chi tiết
                        </a>
                    </div>
                    <div>
                        <p><span>View:</span>
                            {{$book->view}}
                        </p>
                    </div>
                    <div>
                        <a href="{{route('cart.addToCart',$book->id)}}">
                            Thêm vào giỏ
                        </a>
                    </div>
                   {{-- <div><a href="{{route('book.detail',$book->id)}}" class="snip1457"
                            style="background: #005cbf">Detail</a></div>--}}
                   {{-- <div><a href="{{route('products.edit',$product)}}" class="snip1457"
                            style="background: #005cbf">Update</a></div>
                    <div><a href="{{ route('products.destroy', $product) }}" class="snip1457"
                            style="background:orangered"
                            onclick="return confirm('are you sure?')">Delete</a></div>--}}
                </div>
            </div>

    @endforeach


@endsection
