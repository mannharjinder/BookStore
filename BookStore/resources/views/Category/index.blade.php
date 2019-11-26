@extends('Layouts.masterAdmin')
@section('content')
    @include('Shared.navigationBar')
    <h2>Category Management</h2>

    <p>
        <a href="{{route('category.create')}}">Create New</a>
    </p>
    <table class="table">
        <thead>
        <tr>
            <th>
                Code
            </th>
            <th>
                Name
            </th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>
                    {{$category->code}}
                </td>
                <td>
                    {{$category->name}}
                </td>
                <td>
                    <a href="{{route('category.edit', ['id' => $category->id])}}" class="btn-warning">Edit</a> |
                    <a href="{{route('category.delete',['id' => $category->id] )}}" class="btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @include('Shared.footer')
@endsection
