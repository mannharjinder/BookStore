<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('bt.index')}}">
                <img style="max-height:25px" src="{{asset('images\bookstore_logo.png')}}" alt="Book Store"/>
            </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{route('bt.index')}}">Home</a></li>
                <li><a href="{{route('bt.indexDetail')}}">Our Collection</a></li>
                <li><a href="{{route('home.about')}}">About Us</a></li>
                <li><a href="{{route('home.about')}}">Contact Us</a></li>
                @if(Auth::check() && (Auth::user()->admin == '1'))
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admin
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('book.index')}}">Books Management</a></li>
                            <li><a href="{{route('supplier.index')}}">Supplier Management</a></li>
                            <li><a href="{{route('category.index')}}">Category Management</a></li>
                            <li><a href="{{route('order.index')}}">Orders Management</a></li>
                        </ul>
                    </li>
                    
                @endif
            </ul>


            <ul class="nav navbar-nav navbar-right">
                @if(!Auth::check())
                    <li><a href="{{ route('register') }}">Register</a></li>
                    <li><a href="{{ route('login') }}">Log in</a></li>
                @else

                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Hello {{Auth::user()->email}} Log Out
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endif
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{route('shoppingCart.index')}}">
                        <span id="item_count">
                            <?php
                            $count = 0;
                            $cart = session()->get('cart');
                            if ($cart) {
                                $count = count($cart);
                            }
                            ?>
                            {{$count}}
                        </span>
                        <span class="glyphicon glyphicon-shopping-cart">

                        </span> Cart
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
