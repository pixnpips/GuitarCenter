
<x-app-layout>

<div>
    <div class="pull-right">
        <h2>Order Showorder</h2>
    </div>
    <div class="pull-right">
        <h2>{{$item->id}}</h2>
    </div>
    <div class="pull-right">
        <h2>{{$customer->id}}</h2>
    </div>

</div>

<div>@include('customers.overview')</div>
    <div>@include('items.overview')</div>
</x-app-layout>
