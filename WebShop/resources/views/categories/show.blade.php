<x-app-layout>



        <div class="p-4 w-1/2">
            <div class="p-4 flex row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2 class="text-2xl center ">Overview</h2>
                        <strong>Category Id:</strong> {{$category->id}}
                        <strong>Name: </strong>{{$category->name}} </h2>
                    </div>
                </div>
                <div class="px-4">
                    <a href="{{route('categories.index')}}"><x-jet-button class="mt-4" > Back</x-jet-button></a>
                    <a href="{{route('categories.edit',$category)}}"><x-jet-button class="mt-4" >Edit</x-jet-button> </a>
                </div>
            </div>


            <div class="p-4">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Description:</strong>
                        {{$category->desc}}
                    </div>
                </div>
            </div>

            <div class="p-4 bg-slate-300">
                <img src="{{$category->img}}">
            </div>
        </div>



</x-app-layout>
