@extends('Layouts.masterAdmin')
@section('content')
    @include('Shared.navigationBar')
    <h2><span class="glyphicon glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h2>

    <table id="cart">

    </table>
    <div class="container">
        <?php $total = 0 ?>
        @foreach($orderDetail as $od)
            <p hidden>{{ $total += $od->unitPrice * $od->quantity }}</p>
            <div class="row" style="border-bottom: solid 1px #ccc; padding: 10px">
                <div class="col-sm-12 col-lg-2" style="text-align:center">
                    <img src="{{ asset('images/'.$od->image) }}" style="width: 120px" alt="image"/>
                </div>

                <div class="col-sm-12 col-lg-6">
                    <ul>
                        <li style="color: #0066C0; font-weight:bold">{{ $od->name }}</li>
                        <li style="color: #739900"><span class="glyphicon glyphicon-ok"></span> In Stock</li>
                        <li>Order <span style="font-weight: bold">now</span> and it ships <span
                                style="font-weight: bold">tomorrow</span>!
                        </li>
                    </ul>
                </div>

                <div class="col-sm-12 col-lg-2" style="text-align: right">
                    <span>{{ $od->quantity }}</span>
                </div>

                <div class="col-sm-12 col-lg-2" style="text-align: right; color: #E84F05; font-weight: bold">
                    ${{ $od->unitPrice * $od->quantity }}
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
            </div>
            <div class="col-sm-12 col-lg-2">
                <ul style="color: #E84F05; font-weight: bold">
                    <li>${{ $total }}</li>
                    <li>${{ $total * 0.15 }}</li>
                    <li>${{ $total + $total*0.15 }}</li>
                </ul>
            </div>
        </div>
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
