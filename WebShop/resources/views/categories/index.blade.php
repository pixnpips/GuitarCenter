<x-app-layout>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

        <a href="{{ route('categories.create') }}" > <x-jet-button class="mt-4" >New Category</x-jet-button> </a>

    @foreach ($categories as $Category)
            <a class="flex flex-row justify-between" href="{{ route('categories.show',$Category->id) }}">
                <div class="flex flex-row justify-between hover:bg-gray-700 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <div class=" mx-30 my-10 inline-block bg-orange-200 " id="vlad1">
                        <div>
                            <h2 class="mx-30 my-10 inline-block">Category Nr</h2>
                        </div>
                        <div>
                            <h2 class="mx-30 my-10 inline-block">{{$Category->id}}</h2>
                        </div>
                    </div>
                    <div class="mx-30 my-10 inline-block">
                        <div>
                            <h2 class="mx-30 my-10 inline-block">Category Name</h2>
                        </div>
                        <div>
                            <h2 class="mx-30 my-10 inline-block" >{{$Category->name}}</h2>
                        </div>
                    </div>

                    <div class="flex flex-row ">
                        <a href="{{ route('categories.edit',$Category)}}" > <x-jet-button class="mt-4" >Edit</x-jet-button> </a>

                        <form action="{{ route('categories.destroy',$Category->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <x-jet-button type="submit" class="mt-4" >Delete</x-jet-button>
                        </form>
                    </div>

                </div>
            </a>

    @endforeach

</x-app-layout>
