<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
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
                    <div class=" flex flex-row justify-between">
                        <div class="  mx-30 my-10 inline-block bg-orange-200 " id="vlad1">
                                <h2 class="mx-30 my-10 inline-block">Bestellnummer</h2>
                                <h2 class="mx-30 my-10 inline-block">{{$Order->id}}</h2>
                        </div>
                        <div class="mx-30 my-10 ">
                            <div>
                                <h2 class="mx-30 my-10 inline-block">Kunde</h2>
                            </div>
                            <div>
                                <h2 class="mx-30 my-10 inline-block" >{{$Order->customer->id}}</h2>
                                <h2 class="mx-30 my-10 inline-block" >{{$Order->customer->name}}</h2>
                            </div>
                        </div>
                        <div class="mx-30 my-10 inline-block" >
                            <div class="mx-30 my-10 inline-block">
                                <h2 >Article</h2>
                            </div>
                            <div>
                                <h2 class="mx-30 my-10 inline-block">{{$Order->item->id}}</h2>
                                <h2 class="mx-30 my-10 inline-block">{{$Order->item->title}}</h2>
                            </div>
                        </div>
                        <div class="mx-30 my-10 inline-block" >
                            <div class="mx-30 my-10 inline-block">
                                <h2 >Status</h2>
                            </div>
                            <div>
                                <h2 class="mx-30 my-10 inline-block">{{$Order->status}}</h2>
                            </div>
                        </div>

                        <div class="mx-30 my-10 inline-block" >
                            <div class="mx-30 my-10 inline-block">
                                <h2 > Bestelldatum</h2>
                            </div>
                            <div>
                                <h2 class="mx-30 my-10 inline-block">{{$Order->created_at}}</h2>
                            </div>
                        </div>

                        <div class="mx-30 my-10 inline-block" >
                            <div class="mx-30 my-10 inline-block">
                                <h2 >Zuletzt geändert:</h2>
                            </div>
                            <div>
                                <h2 class="mx-30 my-10 inline-block">{{$Order->updated_at}}</h2>
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
                </div>
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>
