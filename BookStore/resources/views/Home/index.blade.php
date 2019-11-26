@extends('Layouts.master')
@section('content')
    @include('Shared.navigationBar')
    <div class="jumbotron">
        
        <h1>Our Collection's</h1>
    </div>
    @include('Shared.search')
    <div class="books">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="shopping_slidebar thumbnail">
                    <aside class="wedget_categories">
                        <h3 class="wedget__titl">Categories</h3>
                        <ul>

                            <li>
                                <a href="{{route('bt.indexDetail')}}">
                                    All Categories
                                </a>
                            </li>
                            @foreach($categories as $category)
                                <li>
                                    <a href="{{route('book.searchBy',[
                                    'category_id' => $category->id
                                    ])}}">
                                        {{$category->name}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </aside>
                </div>
                <div class="shopping_slidebar thumbnail">
                    <aside class="wedget_categories">
                        <h3 class="wedget__titl">Authors</h3>
                        <ul>
                            <li>
                                <a href="{{route('bt.indexDetail')}}">
                                    All Authors
                                </a>
                            </li>
                            @foreach($suppliers as $supplier)
                                <li>
                                    <a href="{{route('book.searchBy',['supplier_id' => $supplier->id])}}">
                                        {{$supplier->name}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </aside>
                </div>
            </div>

            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="row">
                    @foreach($books as $book)
                        <div class="img-container product_price_box details_page thumbnail col-lg-3 col-md-3 col-sm-3"
                             style="text-align: center">
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
                    @endforeach
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        {{$books->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('Shared.footer')
@endsection
