<x-app-layout>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

        <a href="{{ route('customers.create') }}" > <x-jet-button class="mt-4" >New Customer</x-jet-button> </a>

    @foreach ($customers as $Customer)
            <a class="flex flex-row justify-between" href="{{ route('customers.show',$Customer->id) }}">
                <div class="flex flex-row justify-between hover:bg-gray-700 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <div class=" mx-30 my-10 inline-block bg-orange-200 " id="vlad1">
                        <div>
                            <h2 class="mx-30 my-10 inline-block">Kundennummer</h2>
                        </div>
                        <div>
                            <h2 class="mx-30 my-10 inline-block">{{$Customer->id}}</h2>
                        </div>
                    </div>
                    <div class="mx-30 my-10 inline-block">
                        <div>
                            <h2 class="mx-30 my-10 inline-block">Name</h2>
                        </div>
                        <div>
                            <h2 class="mx-30 my-10 inline-block" >{{$Customer->name}}</h2>
                        </div>
                    </div>
                    <div class="mx-30 my-10 inline-block" >
                        <div class="mx-30 my-10 inline-block">
                            <h2 >Birthday</h2>
                        </div>
                        <div>
                            <h2 class="mx-30 my-10 inline-block">{{$Customer->bday}}</h2>
                        </div>

                    </div>
                    <div class="flex flex-row ">
                        <a href="{{ route('customers.edit',$Customer)}}" > <x-jet-button class="mt-4" >Edit</x-jet-button> </a>

                        <form action="{{ route('customers.destroy',$Customer->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('customers.destroy',$Customer)}}" > <x-jet-button type="submit" class="mt-4" >Delete</x-jet-button> </a>
                        </form>
                    </div>

                </div>
            </a>

    @endforeach

</x-app-layout>
