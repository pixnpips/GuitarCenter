<x-app-layout>
    <div>
        <a href="{{ url()->previous() }}"> <x-jet-button>Back to Category</x-jet-button></a>
        <a href="{{ route('WebShop') }}"> <x-jet-button>Back to Shop</x-jet-button></a>
    </div>

    <div>
        <a href="{{route('customCreate',['id'=>$item->id])}}"><x-jet-button>Buy</x-jet-button></a>
    </div>

    <div class="row">
        <div class="">
            <div >
                <strong>Item Number:</strong> {{$item->id}}  <strong>Model:</strong> {{ $item->title }}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="">
            <div class="form-group">
                <strong>Description:</strong>
                {{$item->desc}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                {{ $item->price}}
            </div>
        </div>
        <div class="flex row">
            <div class="w-1/4 p-4">
                <img class="" src="{{$item->img1}}">
            </div >
            <div class="w-1/4 p-4">
                <img src="{{$item->img2}}">
            </div>

            <div class="w-1/4 p-4">
                <img src="{{$item->img3}}">
            </div>
        </div>


    </div>
</x-app-layout>
