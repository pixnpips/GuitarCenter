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
        </div>

{{--        Payment Shit--}}

        <div>
            <a href="{{ url()->previous() }}"> <x-jet-button>Back</x-jet-button></a>

            @if(Auth::check())
            <a href="{{route('items.edit',$item->id)}}"><x-jet-button class="mt-4" >Edit</x-jet-button> </a>
            @endif
        </div>

        <div>
            <a href="{{route('customCreate',['id'=>$item->id])}}"><x-jet-button>Buy</x-jet-button></a>
        </div>

    </div>
</x-app-layout>
