
<x-app-layout>
    <div class="p-4">
        <div>
            <div class="">
                <h2 class="text-2xl">Your Order</h2>
            </div>
        </div>

        <div class="flex row ">
            <div class="w-3/12">
                <div>@include('customers.overview')</div>
                <a href="{{route('goToPayment', ['id'=>$item->id])}}"><x-jet-button>Proceed to Payment</x-jet-button></a>
            </div>
            <div class="w-1/2">
                @include('items.overview')
            </div>

        </div>
    </div>


</x-app-layout>



