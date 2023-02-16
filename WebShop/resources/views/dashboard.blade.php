<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>

    <div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            {{ __('You are logged in!') }} <br><br>
                            {{--                                <a href="{{route('goToPayment', ['id'=>$item->id])}}"><x-jet-button>Go to Payment</x-jet-button></a> &nbsp;--}}
                            {{--                                <a href="{{route('goToPayment', ['id'=>$item->id])}}"><x-jet-button>Update Information for $10</x-jet-button></a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
