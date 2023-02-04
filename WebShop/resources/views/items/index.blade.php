@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 9 CRUD Example from scratch </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('items.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Body</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->title }}</td>
                <td>{{ $item->body }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('items.show',$item->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('items.edit',$item->id) }}">Edit</a>
                    <form action="{{ route('items.destroy',$item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
