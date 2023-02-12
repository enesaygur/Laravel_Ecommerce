@extends("master")
@section("content")
    <?php
    use App\Http\Controllers\ProductController;
    $total=0;
    if(Session::has('user'))
    {
        $total=ProductController::cartItem();
    }

    ?>

    <div class="custom-products">
        <div class="trending-wrapper">
            <h3>Result for Products</h3>
            <div class="col-sm-12">
                @if($total>0)
                    @foreach ($products as $item)
                    <div class="row searched-item justify-content-start">
                        <div class="col-sm-4">
                            <a href="detail/{{$item->id}}">
                                <div class="d-flex justify-content-center">
                                    <img src="{{$item->gallery}}" class="trending-image" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-5">
                            <div class="">
                                <h3>{{$item->name}}</h3>
                                <p>{{$item->description}}</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="d-flex justify-content-center">
                                <a href="/removecart/{{$item->cart_id}}"> <button type="button" class="btn btn-warning">Remove from Cart</button></a>
                            </div>
                        </div>
                    </div>
                    <hr/>
                    @endforeach
                <div class="d-flex justify-content-end pe-4 container">
                    <a href="ordernow" class="btn btn-success">Order Now</a>
                </div>
                @else
                    <div class="d-flex justify-content-start my-4 p-4"><h4>Cart Empty</h4></div>
                @endif
            </div>
        </div>
    </div>
@endsection
