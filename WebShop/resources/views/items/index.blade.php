<x-app-layout>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

        <div class="text-left p-4">
            <h1 class="text-2xl"> Item Overview </h1>
        </div>
    <div class="text-left p-4">
    <a href="{{ route('items.create') }}" > <x-jet-button class="mt-4 bg-green-600 hover:bg-lime-400" >New Item</x-jet-button> </a>
    </div>

    @foreach ($items as $item)
        <a class="flex flex-row  w-full "  href="{{ route('items.show',$item->id) }}">
            <div class="flex flex-row w-3/5 hover:bg-slate-300  border-gray-300  focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <div class=" px-4 w-40" id="vlad1">
                    <div>
                        <h2 class="font-semibold">Item Number</h2>
                    </div>
                    <div>
                        <h2 class="">{{$item->id}}</h2>
                    </div>
                </div>
                <div class="px-4 w-40">
                    <div>
                        <h2 class="font-semibold">Model</h2>
                    </div>
                    <div>
                        <h2 class="" >{{$item->title}}</h2>
                    </div>
                </div>
                <div class="px-4 w-40">
                    <div>
                        <h2 class="font-semibold">Category</h2>
                    </div>
                    <div>
                        <h2 class="" >{{$item->category->name}}</h2>
                    </div>
                </div>
                <div class="px-4 w-40" >
                    <div class="font-semibold">
                        <h2 >Price</h2>
                    </div>
                    <div>
                        <h2 class="">{{$item->price}}</h2>
                    </div>

                </div>
                <div class="px-4 w-40" >
                    <div class="font-semibold">
                        <h2 >Available</h2>
                    </div>
                    <div>
                        <h2 class="">{{$item->pcs}}</h2>
                    </div>

                </div>
                <div class="flex flex-row ">
                    <a href="{{ route('items.edit',$item)}}" class="p-4" > <x-jet-button class="mt-4 " >Edit</x-jet-button> </a>

                    <form action="{{ route('items.destroy',$item->id) }}" method="POST" class="p-4">
                        @csrf
                        @method('DELETE')
                         <x-jet-button type="submit" class="mt-4 bg-red-800 hover:bg-red-600 " >Delete</x-jet-button>
                    </form>
                </div>

            </div>
        </a>

    @endforeach

</x-app-layout>

