@extends("master")
@section("content")
    <div class="container custom-login ">
        <div class="row">
            <div class="col-sm-4 mx-auto">
                <form action="register" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">User name</label>
                        <input type="text" name="username" class="form-control" placeholder="User Name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email Address</label>
                        <input type="email" name="email" placeholder="Email Address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
@endsection
