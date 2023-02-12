@extends("master")
@section("content")
    <div class="custom-products">
    <div id="carouselExampleControls" class="carousel slide  " data-bs-ride="carousel">
        <div class="carousel-inner ">
            @foreach ($products as $item)
            <div class="carousel-item {{$item['id']==1?'active':''}}">
             <a href="detail/{{$item["id"]}}">
                 <img src="{{$item->gallery}}" class="d-block slider-img rounded" alt="">
                 <div class="carousel-caption slider-text rounded">
                     <h3>{{$item->name}}</h3>
                     <p>{{$item->description}}</p>
                 </div>
             </a>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon text-black" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon text-black" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
        <div class="trending-wrapper">
            <h3>Trending Products</h3>
            <div class=" d-flex justify-content-between">
            @foreach ($products as $item)
                <div class="d-flex trending-item justify-content-center text-center">
                    <a href="detail/{{$item->id}}">
                    <img src="{{$item->gallery}}" class="trending-image" alt="">
                    <div class="">
                        <h3>{{$item->name}}</h3>
                        <p>{{$item->description}}</p>
                    </div>
                    </a>
                </div>
            @endforeach
            </div>
        </div>
    </div>
@endsection
