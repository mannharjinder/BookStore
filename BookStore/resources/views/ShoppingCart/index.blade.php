@extends('Layouts.masterAdmin')
@section('content')
    @include('Shared.navigationBar')
    <h2><span class="glyphicon glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h2>

    <table id="cart">

    </table>
    <div class="container">
        <?php $total = 0 ?>

        @if(session('cart'))
            @foreach(session('cart') as $id => $details)

                <?php $total += $details['price'] * $details['quantity'] ?>
                <div class="row" style="border-bottom: solid 1px #ccc; padding: 10px">
                    <div class="col-sm-12 col-lg-2" style="text-align:center">
                        <img src="{{ asset('images/'.$details['image']) }}" style="width: 120px" alt="image"/>
                    </div>

                    <div class="col-sm-12 col-lg-6">
                        <ul>
                            <li style="color: #0066C0; font-weight:bold">{{ $details['name'] }}</li>
                            <li style="color: #739900"><span class="glyphicon glyphicon-ok"></span> In Stock</li>
                            <li>Order <span style="font-weight: bold">now</span> and it ships <span
                                    style="font-weight: bold">tomorrow</span>!
                            </li>
                            <li><a class="btn btn-warning remove-from-cart"
                                   data-id="{{ $id }}">
                                    Remove
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-12 col-lg-2" style="text-align: right">
                        <a href="{{route('remove-from-cart', ['id' => $id])}}">
                    <span class="glyphicon glyphicon-minus-sign">

                    </span>
                        </a>
                        <span>{{ $details['quantity'] }}</span>
                        <a href="{{ route('add-to-cart', ['id' => $id]) }}">
                    <span class="glyphicon glyphicon-plus-sign">

                    </span>
                        </a>
                    </div>

                    <div class="col-sm-12 col-lg-2" style="text-align: right; color: #E84F05; font-weight: bold">
                        ${{ $details['price'] * $details['quantity'] }}
                    </div>

                </div>
            @endforeach

            <div class="row" style="text-align:right">
                <div class="col-sm-12 col-lg-10" style="font-weight: bold">
                    <ul>
                        <li>Sub Price :</li>
                        <li>GST (15%) :</li>
                        <li>Total Price :</li>
                    </ul>
                    <a class="btn btn-danger" href="{{route('empty-cart')}}">
                        Empty Cart <span class="glyphicon glyphicon-step-forward"></span>
                    </a>
                </div>
                <div class="col-sm-12 col-lg-2">
                    <ul style="color: #E84F05; font-weight: bold">
                        <li>${{ $total }}</li>
                        <li>${{ $total * 0.15 }}</li>
                        <li>${{ $total + $total*0.15 }}</li>
                    </ul>
                    @if(Auth::check())
                        <a href="{{route('order.create')}}" class="btn btn-success">
                            Checkout
                            <span class="glyphicon glyphicon-step-forward"></span>
                        </a>
                    @else
                        <a href="{{route('login')}}" class="btn btn-success">
                            Checkout
                            <span class="glyphicon glyphicon-step-forward"></span>
                        </a>
                    @endif
                </div>
            </div>
        @endif
        @if(!session('cart'))
            <h3 style="text-align: center">Shopping Cart Is Empty!</h3>
        @endif
    </div>
    <script type="text/javascript">
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);


            $.ajax({
                url: '{{ url('remove-from-cart') }}',
                method: "DELETE",
                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                success: function (response) {
                    window.location.reload();
                }
            });

        });

    </script>
    @include('Shared.footer')
@endsection
