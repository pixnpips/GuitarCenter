<x-app-layout>

    @foreach ($items as $item)

    <div>
            <div class=" mx-30 my-10 inline-block bg-orange-200 " id="vlad1">
                <div>
                    <h2 class="mx-30 my-10 inline-block">Item Number</h2>
                </div>
                <div>
                    <h2 class="mx-30 my-10 inline-block">{{$item->id}}</h2>
                </div>
            </div>
            <div class="mx-30 my-10 inline-block">
                <div>
                    <h2 class="mx-30 my-10 inline-block">Model</h2>
                </div>
                <div>
                    <h2 class="mx-30 my-10 inline-block" >{{$item->title}}</h2>
                </div>
            </div>
            <div class="mx-30 my-10 inline-block">
                <div>
                    <h2 class="mx-30 my-10 inline-block">Category</h2>
                </div>
                <div>
                    <h2 class="mx-30 my-10 inline-block" >{{$item->category->name}}</h2>
                </div>
            </div>
            <div class="mx-30 my-10 inline-block" >
                <div class="mx-30 my-10 inline-block">
                    <h2 >Price</h2>
                </div>
                <div>
                    <h2 class="mx-30 my-10 inline-block">{{$item->price}}</h2>
                </div>

            </div>
            <div class="mx-30 my-10 inline-block" >
                <div class="mx-30 my-10 inline-block">
                    <h2 >Available</h2>
                </div>
                <div>
                    <h2 class="mx-30 my-10 inline-block">{{$item->pcs}}</h2>
                </div>
            </div>

        <div class="mx-30 my-10 inline-block" >
            <div class="mx-30 my-10 inline-block">
                <h2 >Pictures</h2>
            </div>
            <div>
                <img src="{{$item->img1}}">
            </div>
            <div>
                <img src="{{$item->img2}}">
            </div>
            <div>
                <img src="{{$item->img3}}">
            </div>
        </div>
    </div>
    @endforeach

</x-app-layout>
