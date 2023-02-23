
<x-app-layout>
    <div class="p-4">
        <div>
            <div class="">
                <h2 class="text-3xl">Your Order</h2>
            </div>
        </div>

        <div class="flex row my-8 ">
            <div class="w-1/4">
                <div>@include('customers.overview')</div>
                <a href="{{route('goToPayment', ['id'=>$item->id])}}"> <x-jet-button class="mt-4 bg-green-600 hover:bg-lime-400" >Proceed to Payment</x-jet-button></a>
            </div>
            <div class="w-1/2">
                @include('items.overview')
            </div>

        </div>
    </div>


</x-app-layout>



