@extends('layouts.itemlayout')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 9 CRUD Example from scratch </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('items.create') }}"> Create New Item</a>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('dashboard') }}"> Back</a>
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
            <th>Price</th>
            <th>Pieces</th>
            <th>Description</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->title }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->pcs}}</td>
                <td>{{ $item->desc }}</td>

            </tr>
            <tr>
                <td>{{ $item->img1 }}</td>
                <td>{{ $item->img2 }}</td>
                <td>{{ $item->img3}}</td>
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

{{--    @foreach ($items as $item)--}}

{{--    <div class="border-gray-300">--}}
{{--        <div>--}}
{{--            <p>{{ $item->title }}</p>--}}
{{--            <p>{{ $item->price}}</p>--}}
{{--            <p>{{ $item->pcs}}</p>--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <p>{{ $item->desc }}</p>--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <p>{{ $item->img1}}</p>--}}
{{--            <p>{{ $item->img2}}</p>--}}
{{--            <p>{{ $item->img3}}</p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    @endforeach--}}

@endsection
