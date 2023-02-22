
<x-app-layout>
    <div class="p-4">
        <div class="pull-right">
            <h2 class="text-2xl">Congratulations, your Order reached us!</h2>
            <a href="{{URL('/')}}"><x-jet-button>Go Back to Shop</x-jet-button></a> &nbsp;
        </div>
    </div>

    <div class="p-4">@include('customers.overview')</div>
    <div class="p-4">@include('items.overview')</div>
</x-app-layout>



