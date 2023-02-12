@extends("master")
@section("content")
    <div class="custom-products">
        <div class="trending-wrapper">
            <h3>Orders</h3>
            <div class="col-sm-12">
                <table class="table">
                    <tbody>
                    <tr>
                        <td>Amount</td>
                        <td>$ {{$total}}</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>$ 0</td>
                    </tr>
                    <tr>
                        <td>Delivery</td>
                        <td>$ 10</td>
                    </tr>
                    <tr>
                        <td>Total Amount</td>
                        <td>{{$total + 10}}</td>
                    </tr>
                    </tbody>
                </table>
                <div>
                    <form action="/orderplace" method="post">
                        @csrf
                        <div class="mb-3">
                            <textarea name="address" class="form-control" placeholder="Enter  your adress"></textarea>
                        </div>
                        <div class="mb-3">
                            <h5><label for="exampleInputPassword1" class="form-label">Payment Method</label></h5>
                            <p><input type="radio" value="cash" name="payment"><span>Online</p>
                            <p><input type="radio" value="cash" name="payment"><span>Payment on Delivery</span></p>
                        </div>
                        <button type="submit" class="btn btn-primary">Order Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
