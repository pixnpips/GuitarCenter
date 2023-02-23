<x-app-layout>

    <div class="mx-4 w-36">
        <a href="{{URL('/')}}" class=" p-4" >
            <img src="{{url('/GuitarCenterLogo.png')}}" class=" ">
        </a>
    </div>

    <div class="p-4 ">
        <a href="{{ route('WebShop') }} "> <x-jet-button class=" w-96">Back</x-jet-button></a>
    </div>

    <div class=" flex row ">
        <div>
            <h1 class="p-4 text-3xl" ><strong>{{$category->name}}</strong></h1>
        </div>

    </div>
    <div class="flex row flex-wrap">
        @foreach ($items as $item)
            <a class="w-1/5 p-8 hover:bg-slate-300" href="{{ route('showC',$item->id) }}">

                <div class="flex row justify-between">
                    <div class="">
                        <div>
                            <h2 class=" text-xl font-semibold ">Model</h2>
                        </div>
                        <div>
                            <h2 class="" >{{$item->title}}</h2>
                        </div>
                    </div>

                    <div >
                        <div class="">
                            <h2 class=" text-xl font-semibold " >Price</h2>
                        </div>
                        <div>
                            <h2 class="">{{$item->price}}</h2>
                        </div>

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
    <div class="p-4 ">
        <a href="{{ route('WebShop') }} "> <x-jet-button class=" w-96">Back</x-jet-button></a>
    </div>

</x-app-layout>

