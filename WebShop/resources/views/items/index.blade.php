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

