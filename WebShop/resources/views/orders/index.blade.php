<x-app-layout>

    @if ($message = Session::get('success'))
        <div class=" p-4 bg-lime-500 text-center">
            <p class="text-2xl">{{ $message }}</p>
        </div>
    @endif

        <div class="text-left p-4">
            <h1 class="text-2xl"> Order Overview </h1>
        </div>


    @foreach ($orders as $Order)
            <a class="flex flex-row  w-full " href="{{ route('orders.edit',$Order->id) }}">
                <div class="flex flex-row justify-between min-w-fit hover:bg-slate-300 w-4/5  border-gray-300  focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm

                  @if($Order->status==='delivered') bg-emerald-100
                   @elseif($Order->status==='paid') bg-yellow-100
                   @elseif($Order->status==='returned') bg-red-100
                  @endif
            ">
                    <div class=" px-4 w-40" id="vlad1">
                        <div>
                            <h2 class="font-semibold">Bestellnummer</h2>
                        </div>
                        <div>
                            <h2 class="">{{$Order->id}}</h2>
                        </div>
                    </div>
                    <div class="px-4 w-40">
                        <div>
                            <h2 class="font-semibold">Kunde</h2>
                        </div>
                        <div>
                            <h2 class="" >{{$Order->customer->id}}</h2>
                            <h2 class="" >{{$Order->customer->name}}</h2>
                        </div>
                    </div>
                    <div class="px-4 w-40" >
                        <div class="">
                            <h2 class="font-semibold" >Article</h2>
                        </div>
                        <div>
                            <h2 class="">{{$Order->item->id}}</h2>
                            <h2 class="">{{$Order->item->title}}</h2>
                        </div>

                    </div>

                    <div class="px-4 w-40" >
                        <div class="">
                            <h2 class="font-semibold" >Status</h2>
                        </div>
                        <div>
                            <h2 class="">{{$Order->status}}</h2>
                        </div>
                    </div>

                    <div class="px-4 w-40" >
                        <div class="">
                            <h2 class="font-semibold" > Bestelldatum</h2>
                        </div>
                        <div>
                            <h2 class="">{{$Order->created_at}}</h2>
                        </div>
                    </div>

                    <div class="px-4 w-40" >
                        <div class="">
                            <h2 class="font-semibold" >Zuletzt geändert:</h2>
                        </div>
                        <div>
                            <h2 class="">{{$Order->updated_at}}</h2>
                        </div>
                    </div>

                    <div class="flex flex-row p-4">
                        <a href="{{ route('orders.edit',$Order)}}" > <x-jet-button class="mt-4" >Edit</x-jet-button> </a>
                    </div>
                </div>
            </a>

    @endforeach

</x-app-layout>
