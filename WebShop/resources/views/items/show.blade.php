<x-app-layout>
    <div class=" p-4">


    <div class="p-4 flex row">
        <div class="">
            <div >
                <strong>Item Number:</strong> {{$item->id}}  <strong>Model:</strong> {{ $item->title }}
            </div>
        </div>
        <div class=" flex row mx-4" >
            <div>
                <a href="{{ url()->previous() }}"> <x-jet-button>Back</x-jet-button></a>

                @if(Auth::check())
                    <a href="{{route('items.edit',$item->id)}}"><x-jet-button class="" >Edit</x-jet-button> </a>
                @endif
            </div>

            <div class="mx-4">
                <a href="{{route('customCreate',['id'=>$item->id])}}" ><x-jet-button class="bg-green-600 hover:bg-lime-400">Buy</x-jet-button></a>
            </div>
        </div>
    </div>

    <div class="p-4">
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

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pieces:</strong>
                {{ $item->pcs}}
            </div>
        </div>


        <div class="flex row ">
            <div class="w-1/4   p-4 bg-slate-300 ">
            <img class="imgFull" src="{{$item->img1}}" class="my-auto">
            </div>
            <div class="w-1/4  p-4  mx-4 bg-slate-300">
            <img class="imgFull" src="{{$item->img2}}" class="my-auto">
            </div>
                <div class= "w-1/4  p-4 bg-slate-300">
            <img class="imgFull" src="{{$item->img3}}" class="my-auto">
                </div>
        </div>

    </div>

    </div>
</x-app-layout>
