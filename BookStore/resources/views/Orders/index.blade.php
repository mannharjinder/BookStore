@extends('Layouts.masterAdmin')
@section('content')
    @include('Shared.navigationBar')
    <h2>Orders Management</h2>

    <table class="table">
        <thead>
        <tr>
            <th>
                First Name
            </th>
            <th>
                Last Name
            </th>
            <th>
                Phone
            </th>
            <th>
                Address
            </th>
            <th>
                Order date
            </th>
            <th>
                Status
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>
                    {{$order->firstName}}
                </td>
                <td>
                    {{$order->lastName}}
                </td>
                <td>
                    {{$order->phone}}
                </td>
                <td>
                    {{$order->address}}
                </td>
                <td>
                    {{$order->created_at}}
                </td>
                <td>
                    @if($order->status == 0)
                        <p class="btn-success">Shipped</p>
                    @else
                        <p class="btn-info">Waiting</p>
                    @endif
                </td>
                <td>
                    <a href="{{route('orderDetail.index',['id'=> $order->id])}}"
                       class="btn-primary">Details</a>
                    <a href="{{route('order.update',['id'=>$order->id])}}" class="btn-warning">Edit</a>
                    <a href="{{route('order.delete',['id' => $order->id])}}" class="btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @include('Shared.footer')
@endsection
