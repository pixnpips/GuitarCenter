<x-app-layout>
    <div class="p-4">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2 class="text-2xl center ">Customer</h2>
                    <strong>Customer Id:</strong> {{$Customer->id}}
                    <strong>Name: </strong>{{$Customer->name}} </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Adress:</strong>
                    {{$Customer->street}}{{$Customer->postal}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>E-Mail:</strong>
                    {{$Customer->email}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Birthday:</strong>
                    {{$Customer->bday}}
                </div>
            </div>
        </div>
        <div class="pull-right">
            <a href="{{route('customers.index')}}"><x-jet-button class="mt-4" > Back</x-jet-button></a>
            <a href="{{route('customers.edit',$Customer)}}"><x-jet-button class="mt-4" >Edit</x-jet-button> </a>
        </div>
    </div>

</x-app-layout>
