<h2 class="text-2xl" >Product Overview</h2>
    <div class="row">
        <div class="flex-row justify-between col-lg-12 margin-tb">
            <div >
                <strong>Model:</strong> {{ $item->title }}
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
                <strong>Price:</strong>
                {{ $item->price}}
            </div>
        </div>

        <div class="w-1/2">
            <img class="w-1/2" src="{{$item->img1}}">
        </div>

    </div>

