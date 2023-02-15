<x-app-layout>
    <div class="row">
        <div class="flex-row justify-between col-lg-12 margin-tb">
            <div >
                <strong>Item Number:</strong> {{$item->id}}  <strong>Model:</strong> {{ $item->title }}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{$item->desc}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category:</strong>
                {{$item->category->name}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                {{ $item->price}}
            </div>
        </div>

{{--        Hier haben wir die Anzeige der  Bilder Pfade aus der Datenbank--}}

{{--        <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--            <div class="form-group">--}}
{{--                <strong>Image 1:</strong>--}}
{{--                {{ $item->img1}}--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--            <div class="form-group">--}}
{{--                <strong>Image 2:</strong>--}}
{{--                {{ $item->img2}}--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--            <div class="form-group">--}}
{{--                <strong>Image 3:</strong>--}}
{{--                {{ $item->img3}}--}}
{{--            </div>--}}
{{--        </div>--}}


        <div>
            <img src="{{$item->img1}}">
            <img src="{{$item->img2}}">
            <img src="{{$item->img3}}">
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pieces:</strong>
                {{ $item->pcs}}
            </div>
        </div>#

{{--        Payment Shit--}}


        <div>
            <a href="{{route('items.index') }}"> <x-jet-button>Back</x-jet-button></a>
            <a href="{{route('items.edit',$item->id)}}"><x-jet-button class="mt-4" >Edit</x-jet-button> </a>
        </div>


{{--        <------------------Jetzt schicken wir mit dem Kauf Button auch die Korrekte id mit!------------------->><--}}

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
                                <a href="{{route('goToPayment', ['id'=>$item->id])}}"><x-jet-button>Go to Payment</x-jet-button></a> &nbsp;
{{--                                <a href="{{route('goToPayment', ['id'=>$item->id])}}"><x-jet-button>Update Information for $10</x-jet-button></a>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <a href="{{route('customCreate',['id'=>$item->id])}}"><x-jet-button>Buy</x-jet-button></a>
        </div>

    </div>
</x-app-layout>
