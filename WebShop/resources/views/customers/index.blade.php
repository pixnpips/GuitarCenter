<x-app-layout>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
        <div class="text-left p-4">
            <h1 class="text-2xl"> Customer Overview </h1>
        </div>

        <div class="text-left p-4">
        <a href="{{ route('customers.create') }}" > <x-jet-button class="mt-4 bg-green-600 hover:bg-lime-400" >New Customer</x-jet-button> </a>
        </div>
    @foreach ($customers as $Customer)
            <a class="flex flex-row  w-full" href="{{ route('customers.show',$Customer->id) }}">
                <div class="flex  w-1/2 hover:bg-slate-300  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <div class=" px-4 w-40" id="vlad1">
                        <div>
                            <h2 class="font-semibold">Kundennummer</h2>
                        </div>
                        <div>
                            <h2 class="">{{$Customer->id}}</h2>
                        </div>
                    </div>
                    <div class="px-4 w-40">
                        <div>
                            <h2 class="font-semibold">Name</h2>
                        </div>
                        <div>
                            <h2 class="" >{{$Customer->name}}</h2>
                        </div>
                    </div>
                    <div class="px-4 w-40" >
                        <div class="font-semibold">
                            <h2 >Birthday</h2>
                        </div>
                        <div>
                            <h2 class="px-4">{{$Customer->bday}}</h2>
                        </div>

                    </div>
                    <div class="flex flex-row ">
                        <a href="{{ route('customers.edit',$Customer)}}" class="p-4" > <x-jet-button class="mt-4" >Edit</x-jet-button> </a>

                        <form action="{{ route('customers.destroy',$Customer->id) }}" class="p-4" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('customers.destroy',$Customer)}}" > <x-jet-button type="submit" class="mt-4 bg-red-800 hover:bg-red-600 " >Delete</x-jet-button> </a>
                        </form>
                    </div>

                </div>
            </a>

    @endforeach

</x-app-layout>
