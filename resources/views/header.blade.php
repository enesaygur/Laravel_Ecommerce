<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
    $total=ProductController::cartItem();
}

?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">E-comm</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/myorders">Orders</a>
                </li>
            </ul>
            <form class="d-flex navbar-left me-auto" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <ul class="navbar-nav gap-2">
                <li class="d-flex align-items-center">
                    <a href="/cartlist">Cart({{$total}})</a>
                </li>
                    @if(Session::has('user'))

                <li class="nav-item dropdown align-items-center">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{Session::get('user')->name}}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end ">
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                </li>
                @else
                    <li class="d-flex align-items-center">
                        <a href="/login">Login</a>
                    </li>
                    <li class="d-flex align-items-center">
                        <a href="/register">Register</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
