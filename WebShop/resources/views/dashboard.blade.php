<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold ">
            Welcome {{auth()->user()->name}} see the latest Activities:
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Latest Orders
            </h2>


            <div class=" bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @foreach ($orders as $Order)
                    <div class=" flex flex-row justify-start px-4  py-2">
                        <div class="  w-40" id="vlad1">
                                <h2 class="">Bestellnummer</h2>
                                <h2 class="">{{$Order->id}}</h2>
                        </div>
                        <div class=" w-40 ">
                            <div>
                                <h2 class="font-semibold">Kunde</h2>
                            </div>
                            <div>
                                <h2 class="">{{$Order->customer->id}} {{$Order->customer->name}}</h2>
                            </div>
                        </div>
                        <div class=" w-40 " >
                            <div class="">
                                <h2 class="font-semibold" >Article</h2>
                            </div>
                            <div>
                                <h2 class="">{{$Order->item->id}}</h2>
                                <h2 class="">{{$Order->item->title}}</h2>
                            </div>
                        </div>
                        <div class=" w-40 " >
                            <div class="">
                                <h2  class="font-semibold" >Status</h2>
                            </div>
                            <div>
                                <h2 class="">{{$Order->status}}</h2>
                            </div>
                        </div>

                        <div class=" w-40" >
                            <div class="">
                                <h2  class="font-semibold"> Bestelldatum</h2>
                            </div>
                            <div>
                                <h2 class="">{{$Order->created_at}}</h2>
                            </div>
                        </div>

                        <div class=" w-40" >
                            <div class="">
                                <h2  class="font-semibold" >Zuletzt geändert:</h2>
                            </div>
                            <div>
                                <h2 class="">{{$Order->updated_at}}</h2>
                            </div>
                        </div>


                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                New Customers
            </h2>

            @foreach ($customers as $Customer)
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex flex-row justify-start  w-full border-gray-300  rounded-md shadow-sm px-4  py-2">
                    <div class=" w-3/12 " >
                        <div>
                            <h2 class="">Kundennummer</h2>
                        </div>
                        <div>
                            <h2 class="">{{$Customer->id}}</h2>
                        </div>
                    </div>

                    <div class=" w-3/12">
                        <div>
                            <h2 class="">Name</h2>
                        </div>
                        <div>
                            <h2 class="" >{{$Customer->name}}</h2>
                        </div>
                    </div>

                    <div class=" w-3/12" >
                        <div class="">
                            <h2 >Birthday</h2>
                        </div>
                        <div>
                            <h2 class="">{{$Customer->bday}}</h2>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>
