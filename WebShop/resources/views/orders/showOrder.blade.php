
<x-app-layout>
    <div>
        <div class="pull-right">
            <h2>Order Overview</h2>
        </div>
    </div>

    <div>@include('customers.overview')</div>
    <div>@include('items.overview')</div>

    <a href="{{route('goToPayment', ['id'=>$item->id])}}"><x-jet-button>Go to Payment</x-jet-button></a> &nbsp;

</x-app-layout>



