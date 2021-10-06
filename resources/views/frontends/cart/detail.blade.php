@extends('layouts.master_cart')
@section('title','cart')
@section('content')

    <div class="container mb-4">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>

                        @if(!$cart==null)
                            @foreach($cart as $book)
                                <tr>
                                    <th>Image</th>
                                    <th>Book</th>
                                    <th scope="col" class="text-center">
                                        Quantity
                                    </th>
                                    <th>Price</th>
                                    <th> Total</th>
                                    <th> action</th>
                                </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div><img src="{{asset('storage/'.$book['image']) }}"
                                     alt="{{asset('storage/'.$book['image']) }}" style="width:120px;height: 100px;">
                                </div>
                            </td>
                            <td><div class="name">{{$book['name']}}</div></td>
                            <td class="text-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                           class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                                        <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
                                    </svg>
                                </span>
                                <input class="quantity" id="quantity{{$cart[$key]}}" type="number" value="{{$book['quantity']}}">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                        <path
                                            d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                    </svg>
                                </span>
                            </td>
                            <td> <div class="price">{{$book['price']}}</div>
                            <input id="unit_price" value="{{ $book['price'] }}" hidden  />
                            </td>
                            <td> <div class="total" id="total">{{$book['total']}}</div></td>
                            <td>
                                <a href="" name="delete" class="btn btn-sm btn-danger">delete</a>
                            </td>
                        </tr>
                        </tbody>
                        @endforeach
                        @elseif($cart==null)
                            <h3>
                                Giỏ hàng hiện trống !!
                            </h3>
                        @endif
                        <fbody>
                           <tr>
                               <td></td>
                               <td></td>
                               <td scope="col" class="text-center">
                               </td>
                               <th>Tổng tiền:</th>
                               <td>  {{$allTotal}}</td>
                               <td> </td>
                           </tr>

                        </fbody>
                    </table>
                </div>
            </div>
            <div class="col mb-2">
                <div class="row">
                    <div class="col-sm-12  col-md-6">
                        <a href="{{route('index')}}" class="btn btn-block btn-primary">Tiếp tục chọn sách</a>
                    </div>
                    <div class="col-sm-12 col-md-6 text-right">
                        <button class="btn btn-block btn-success text-uppercase">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function (){
                $('#quantity').change(function (e){
                    const quantity = e.target.value;
                    $("#total").text(quantity * (+$("#unit_price").val()))
            })
        })

    </script>

@endsection

