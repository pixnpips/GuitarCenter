<x-app-layout>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="text-xl center ">Overview</h2>
                <strong>Category Id:</strong> {{$category->id}}
                <strong>Name: </strong>{{$category->name}} </h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{$category->desc}}
            </div>
        </div>

    <div class="pull-right">
        <a href="{{route('categories.index')}}"><x-jet-button class="mt-4" > Back</x-jet-button></a>
        <a href="{{route('categories.edit',$category)}}"><x-jet-button class="mt-4" >Edit</x-jet-button> </a>
    </div>

</x-app-layout>
