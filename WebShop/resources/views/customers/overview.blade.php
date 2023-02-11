<x-app-layout>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="text-xl center ">Overview</h2>
                <strong>Customer Id:</strong> {{$customer->id}}
                <strong>Name: </strong>{{$customer->name}} </h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Adress:</strong>
                {{$customer->street}}{{$customer->postal}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>E-Mail:</strong>
                {{$customer->email}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Birthday:</strong>
                {{$customer->bday}}
            </div>
        </div>
    </div>
</x-app-layout>
