@extends('layouts.app')

@section('content')
<div class="container">
    <h1>View Book</h1>

    <table class="table table-hover">
        <tbody>
            <tr>
                <td><strong> Title </strong></td>
                <td>{{ $book->title }}</td>
            </tr>

            <tr>
                <td><strong> Description </strong> </td>
                <td>{{ $book->description }}</td>
            </tr>

            <tr>
                <td><strong> Category </strong> </td>
                <td>{{ $book->category }}</td>
            </tr>
</tbody>
</table>
</div>
@endsection
