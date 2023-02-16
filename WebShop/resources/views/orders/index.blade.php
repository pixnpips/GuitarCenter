<x-app-layout>

    <div class="pull-right">
        <h2>Order Index</h2>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

{{--   Zunächst unnötig, da Kunde selbst bestellen kann--}}
{{--        <a href="{{ route('orders.create') }}" > <x-jet-button class="mt-4" >New Order</x-jet-button> </a>--}}

    @foreach ($orders as $Order)
            <a class="flex flex-row justify-between" href="{{ route('orders.edit',$Order->id) }}">
                <div class="flex flex-row justify-between hover:bg-gray-700 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <div class=" mx-30 my-10 inline-block bg-orange-200 " id="vlad1">
                        <div>
                            <h2 class="mx-30 my-10 inline-block">Bestellnummer</h2>
                        </div>
                        <div>
                            <h2 class="mx-30 my-10 inline-block">{{$Order->id}}</h2>
                        </div>
                    </div>
                    <div class="mx-30 my-10 inline-block">
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

                    <div class="flex flex-row ">
                        <a href="{{ route('orders.edit',$Order)}}" > <x-jet-button class="mt-4" >Edit</x-jet-button> </a>
                    </div>
                </div>
            </a>

    @endforeach

</x-app-layout>
