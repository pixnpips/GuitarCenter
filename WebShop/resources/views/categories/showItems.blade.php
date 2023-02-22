<x-app-layout>

    <div class="mx-30 my-10 text-2xl col-xs-12 col-sm-12 col-md-12 ">
        <a href="{{ route('WebShop') }}"> <x-jet-button>Back</x-jet-button></a>
        <h1 class="mx-30 my-10 text-3xl" ><strong>{{$category->name}}</strong></h1>
    </div>
    <div class="flex row">
    @foreach ($items as $item)
        <a class="w-1/3 p-4 hover:bg-slate-300" href="{{ route('showC',$item->id) }}">
            <div class="">
                <div>
                    <h2 class=" ">Model</h2>
                </div>
                <div>
                    <h2 class="" >{{$item->title}}</h2>
                </div>
            </div>
            <div class="">
                <div>
                    <h2 class="">Category</h2>
                </div>
                <div>
                    <h2 class="" >{{$item->category->name}}</h2>
                </div>
            </div>
            <div >
                <div class="">
                    <h2 >Price</h2>
                </div>
                <div>
                    <h2 class="">{{$item->price}}</h2>
                </div>

            </div>

            @if(Auth::check())
            <div class="" >
                <div class="">
                    <h2 >Available</h2>
                </div>
                <div>
                    <h2 class="">{{$item->pcs}}</h2>
                </div>
            </div>
            @endif

        <div class="" >
            <div class="">
                <img  src="{{$item->img1}}">
            </div>
        </div>

        </a>
    @endforeach

    </div>
        <div>
            <a href="{{ route('WebShop') }}"> <x-jet-button>Back</x-jet-button></a>
        </div>
</x-app-layout>

