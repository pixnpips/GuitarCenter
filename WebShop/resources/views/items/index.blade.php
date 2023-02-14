<x-app-layout>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <a href="{{ route('items.create') }}" > <x-jet-button class="mt-4" >New Item</x-jet-button> </a>

    @foreach ($items as $item)
        <a class="flex flex-row justify-between" href="{{ route('items.show',$item->id) }}">
            <div class="flex flex-row justify-between hover:bg-gray-700 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <div class=" mx-30 my-10 inline-block bg-orange-200 " id="vlad1">
                    <div>
                        <h2 class="mx-30 my-10 inline-block">Item Number</h2>
                    </div>
                    <div>
                        <h2 class="mx-30 my-10 inline-block">{{$item->id}}</h2>
                    </div>
                </div>
                <div class="mx-30 my-10 inline-block">
                    <div>
                        <h2 class="mx-30 my-10 inline-block">Model</h2>
                    </div>
                    <div>
                        <h2 class="mx-30 my-10 inline-block" >{{$item->title}}</h2>
                    </div>
                </div>
                <div class="mx-30 my-10 inline-block">
                    <div>
                        <h2 class="mx-30 my-10 inline-block">Category</h2>
                    </div>
                    <div>
                        <h2 class="mx-30 my-10 inline-block" >{{$item->category->name}}</h2>
                    </div>
                </div>
                <div class="mx-30 my-10 inline-block" >
                    <div class="mx-30 my-10 inline-block">
                        <h2 >Price</h2>
                    </div>
                    <div>
                        <h2 class="mx-30 my-10 inline-block">{{$item->price}}</h2>
                    </div>

                </div>
                <div class="mx-30 my-10 inline-block" >
                    <div class="mx-30 my-10 inline-block">
                        <h2 >Available</h2>
                    </div>
                    <div>
                        <h2 class="mx-30 my-10 inline-block">{{$item->pcs}}</h2>
                    </div>

                </div>
                <div class="flex flex-row ">
                    <a href="{{ route('items.edit',$item)}}" > <x-jet-button class="mt-4" >Edit</x-jet-button> </a>

                    <form action="{{ route('items.destroy',$item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                         <x-jet-button type="submit" class="mt-4" >Delete</x-jet-button>
                    </form>
                </div>

            </div>
        </a>

    @endforeach

</x-app-layout>

{{--<div class="row">--}}
{{--        <div class="col-lg-12 margin-tb">--}}
{{--            <div class="pull-left">--}}
{{--                <h2>Item Overview</h2>--}}
{{--            </div>--}}
{{--            <div class="pull-right">--}}
{{--                <a class="btn btn-success" href="{{ route('items.create') }}"> Create New Item</a>--}}
{{--            </div>--}}
{{--            <div class="pull-right">--}}
{{--                <a class="btn btn-primary" href="{{ route('dashboard') }}"> Back</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    @if ($message = Session::get('success'))--}}
{{--        <div class="alert alert-success">--}}
{{--            <p>{{ $message }}</p>--}}
{{--        </div>--}}
{{--    @endif--}}

{{--    <table class="table table-bordered">--}}
{{--        <tr>--}}
{{--            <th>Title</th>--}}
{{--            <th>Price</th>--}}
{{--            <th>Pieces</th>--}}
{{--            <th>Description</th>--}}
{{--        </tr>--}}
{{--        @foreach ($items as $item)--}}
{{--            <tr>--}}
{{--                <td>{{ $item->title }}</td>--}}
{{--                <td>{{ $item->price }}</td>--}}
{{--                <td>{{ $item->pcs}}</td>--}}
{{--                <td>{{ $item->desc }}</td>--}}
{{--                <td>--}}
{{--                    <a class="btn btn-info" href="{{ route('items.show',$item->id) }}">Show</a>--}}
{{--                    <a class="btn btn-primary" href="{{ route('items.edit',$item->id) }}">Edit</a>--}}
{{--                    <form action="{{ route('items.destroy',$item->id) }}" method="POST">--}}
{{--                        @csrf--}}
{{--                        @method('DELETE')--}}
{{--                        <button type="submit" class="btn btn-danger">Delete</button>--}}
{{--                    </form>--}}
{{--                </td>--}}

{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>{{ $item->img1 }}</td>--}}
{{--                <td>{{ $item->img2 }}</td>--}}
{{--                <td>{{ $item->img3}}</td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
{{--    </table>--}}

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

{{--@endsection--}}
