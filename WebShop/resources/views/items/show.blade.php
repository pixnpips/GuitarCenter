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

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image 1:</strong>
                {{ $item->img1}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image 2:</strong>
                {{ $item->img2}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image 3:</strong>
                {{ $item->img3}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pieces:</strong>
                {{ $item->pcs}}
            </div>
        </div>
        <div>
            <a href="{{route('items.index') }}"> <x-jet-button>Back</x-jet-button></a>
            <a href="{{route('items.edit',$item->id)}}"><x-jet-button class="mt-4" >Edit</x-jet-button> </a>
        </div>


{{--        <------------------Jetzt schicken wir mit dem Kauf Button auch die Korrekte id mit!------------------->><--}}
        <div>
            <a href="{{route('customCreate',['id'=>$item->id])}}"><x-jet-button>Buy</x-jet-button></a>
        </div>

    </div>
</x-app-layout>
