<div class="container books">
    <div class="row all_products text-center section_title">
        <h2 class="text-center">OUR <span>LATEST</span> ADVENTURES</h2>
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
    </div>
    <div class="row">
        @foreach($books as $book)
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="img-container product_price_box product_home_page img-thumbnail">
                <img src="{{asset('images/'.$book->image)}}" alt="{{$book->image}}" class="product-img">
                <h2 class="book_title">{{$book->name}}</h2>
                <h2 class="price">${{$book->price}}</h2>
                <p class="btn-holder">
                    <a href="{{ route('add-to-cart',['id' => $book->id]) }}"
                       class="btn btn-success glyphicon glyphicon-shopping-cart book-btn fa-shoopping-cart"
                       role="button">
                        Add to cart
                    </a>
                </p>
            </div>
        </div>
        @endforeach
    </div>
</div>
<br>
