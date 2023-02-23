<x-app-layout>

<div class="top-0 right-0 p-4 sm:block text-right">

    <div class="w-36">
        <a href="{{URL('/')}}" class="w-36">
            <img href="{{URL('/')}}" src="{{url('/GuitarCenterLogo.png')}}" class=" w-36">
        </a>
    </div>

    @auth
        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
    @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
        @endif
    @endauth
</div>

    @foreach($categories as $category)
        <a class=" flex row p-4 w-full hover:bg-slate-300" href="{{route('showItems',$category->id)}}">
                <div class="w-1/3" >
                    <img src="{{$category->img}}" class="" >
                </div>
                <div class="w-2/3 mx-4 ">
                    <h2 class="text-2xl font-bold ">{{$category->name}}</h2>
                    <p class="">{{$category->desc}}</p>
                </div>
        </a>
    @endforeach

</x-app-layout>
