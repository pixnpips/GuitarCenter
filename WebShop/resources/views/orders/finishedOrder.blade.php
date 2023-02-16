
<x-app-layout>
    <div>
        <div class="pull-right">
            <h2>Congratulations, your Order reached us!</h2>
        </div>
    </div>

    <div>@include('customers.overview')</div>
    <div>@include('items.overview')</div>

    <a href="{{URL('/')}}"><x-jet-button>Go Back to Shop</x-jet-button></a> &nbsp;

</x-app-layout>



