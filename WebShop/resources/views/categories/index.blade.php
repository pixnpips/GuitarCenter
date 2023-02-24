<x-app-layout>
    @if ($message = Session::get('success'))
        <div class=" p-4 bg-lime-500 text-center">
            <p class="text-2xl">{{ $message }}</p>
        </div>
    @endif

    <div class="text-left p-4">
        <h1 class="text-2xl"> Category Overview </h1>
    </div>
        <div class="text-left p-4">
             <a href="{{ route('categories.create') }}" > <x-jet-button class="mt-4 bg-green-600 hover:bg-lime-400" >New Category</x-jet-button> </a>
        </div>

    @foreach ($categories as $Category)
            <a class="flex flex-row  w-full " href="{{ route('categories.show',$Category->id) }}">
                <div class="flex flex-row justify-between hover:bg-slate-300 w-1/2 min-w-fit border-gray-300  focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">

                    <div class="  px-4 w-40" id="vlad1">
                        <div>
                            <h2 class="font-semibold">Category Nr</h2>
                        </div>
                        <div>
                            <h2 class="">{{$Category->id}}</h2>
                        </div>
                    </div>
                    <div class=" px-4  w-40">
                        <div>
                            <h2 class=" font-semibold">Category Name</h2>
                        </div>
                        <div>
                            <h2 class="" >{{$Category->name}}</h2>
                        </div>
                    </div>

                    <div class="flex ">
                        <a href="{{ route('categories.edit',$Category)}}" class="p-4" > <x-jet-button class="mt-4" >Edit</x-jet-button> </a>

                        <form action="{{ route('categories.destroy',$Category->id) }}" method="POST" class="p-4">
                            @csrf
                            @method('DELETE')
                            <x-jet-button type="submit" class="mt-4 bg-red-800 hover:bg-red-600 " >Delete</x-jet-button>
                        </form>
                    </div>

                </div>
            </a>


    @endforeach

</x-app-layout>
