@extends("master")
@section("content")
    <div class="custom-products">
        <div class="trending-wrapper">
            <h3>My Orders</h3>
            <hr/>
            <div class="col-sm-12">
                    @foreach ($orders as $item)
                        <div class="row searched-item justify-content-start">
                            <div class="col-sm-3">
                                <a href="detail/{{$item->id}}">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{$item->gallery}}" class="trending-image" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <div class="">
                                    <h4>{{$item->name}}</h4>
                                    <p>{{$item->description}}</p>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <h4>Delivery Status</h4>
                                <p>{{$item->status}}</p>
                            </div>
                            <div class="col-sm-2">
                                <h4>Address</h4>
                                <p>{{$item->address}}</p>
                            </div>
                            <div class="col-sm-2">
                                <h4>Payment Method</h4>
                                <p>{{$item->payment_method}}</p>
                            </div>
                        </div>
                        <hr/>
                    @endforeach
            </div>
        </div>
    </div>
@endsection
