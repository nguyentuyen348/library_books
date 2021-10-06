

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
                        <hr>
                        <p>
                            <span>View: </span>{{ $book->view}}
                        </p>
                    </div>

