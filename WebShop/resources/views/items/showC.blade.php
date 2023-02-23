<x-app-layout>

    <div class="mx-4 w-36">
        <a href="{{URL('/')}}" class=" p-4" >
            <img src="{{url('/GuitarCenterLogo.png')}}" class=" ">
        </a>
    </div>

    <div class="p-4">
        <div class="my-2">
{{--            <a href="{{ url()->previous() }}"> <x-jet-button>Back to Category</x-jet-button></a>--}}
            <a href="{{ route('showItems',['id'=>$item->category_id]) }}"> <x-jet-button>Back to Category</x-jet-button></a>
            <a href="{{ route('WebShop') }}"> <x-jet-button>Back to Shop</x-jet-button></a>
            <a href="{{route('customCreate',['id'=>$item->id])}}"><x-jet-button class=" text-center w-96 bg-green-600 hover:bg-lime-400">Buy</x-jet-button></a>
        </div>


        <div class="my-2">
            <div class="">
                <div >
                    <strong>Item Number:</strong> {{$item->id}}  <strong>Model:</strong> {{ $item->title }}
                </div>
            </div>
        </div>

        <div>
            <div class="my-2">
                <div class="form-group">
                    <strong>Description:</strong>
                    {{$item->desc}}
                </div>
            </div>

            <div class="my-2">
                <div class="form-group">
                    <strong>Price:</strong>
                    {{ $item->price}}
                </div>
            </div>
            <div class="flex row">
                <div class="w-1/3 p-4">
                    <img class="" src="{{$item->img1}}">
                </div >
                <div class="w-1/3 p-4">
                    <img src="{{$item->img2}}">
                </div>

                <div class="w-1/3 p-4">
                    <img src="{{$item->img3}}">
                </div>
            </div>

        </div>

    </div>
</x-app-layout>
