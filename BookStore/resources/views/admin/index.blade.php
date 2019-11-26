@extends('Layouts.masterAdmin')
@section('content')
    @include('Shared.navigationBar')
    <h2>Index</h2>

    <p>
        <a href="{{route('book.create')}}">Create New</a>
    </p>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-primary">
            <th>
                ID
            </th>
            <th>
                Category ID
            </th>
            <th>
                Code
            </th>
            <th>
                Description
            </th>
            <th>
                Image
            </th>
            <th>
                Name
            </th>
            <th>
                Price
            </th>
            <th>
                Supplier ID
            </th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($books as $book)
            <tr>
                <td>
                    {{$book->id}}
                </td>
                <td>
                    {{$book->category_id}}
                </td>
                <td>
                    {{$book->code}}
                </td>
                <td>
                    {{$book->description}}
                </td>
                <td>
                    {{$book->image}}
                </td>
                <td>
                    {{$book->name}}
                </td>
                <td>
                    {{$book->price}}
                </td>
                <td>
                    {{$book->supplier_id}}
                </td>
                <td>
                    <a asp-action="Edit" asp-route-id="@item.ID" class="btn-warning">Edit</a>
                    <br/>
                    <a asp-action="Details" asp-route-id="@item.ID" class="btn-primary">Details</a>
                    <br/>
                    <a asp-action="Delete" asp-route-id="@item.ID" class="btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @include('Shared.footer')
@endsection
