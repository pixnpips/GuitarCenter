

<x-app-layout>
    <div class="w-1/2 mx-auto p-4 sm:p-6 lg:p-8">

        <div class="pull-right">
            <h2 class="text-2xl">Edit Order</h2>
        </div>

        <div class="my-2">
            <div class="my-2">
                <div class="form-group">
                    <strong>Order/Date</strong>
                    {{$order->id}}
                    {{$order->created_at}}
                </div>
            </div>
            <div class="my-2">
                <div class="form-group">
                    <strong>Customer</strong>
                    {{$order->customer->id}}
                    {{$order->customer->name}}
                    {{$order->customer->street}}
                    {{$order->customer->postal}}
                    {{$order->customer->email}}
                </div>
            </div>
            <div class="my-2">
                <div class="form-group">
                    <strong>Article</strong>
                    {{$order->item->id}}
                    {{$order->item->title}}
                    {{$order->item->price}}
                </div>
            </div>

            <form action="{{ route('orders.update',$order->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>Status</strong>
                    <select name="status"  placeholder="Status" option="{{$order->status}}"
                            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    >   <option selected="selected" value="{{$order->status}}">{{$order->status}}</option>
                        <option value="packed">packed</option>
                        <option value="shipped">shipped</option>
                        <option value="delivered">delivered</option>
                        <option value="returned">returned</option>
                    </select>
                </div>
                <div class="r">
                    <x-jet-button type="submit" class="mt-4">Update Status</x-jet-button>
                </div>
            </form>

            <div class="flex row">
                <div class="">
                    <a href="{{ route('orders.index') }}"  >
                        <x-jet-button class="mt-4">Back</x-jet-button>
                    </a>
                </div>
                <div class="mx-2">
                    <form action="{{ route('orders.destroy',$order->id) }}" method="POST"  class="mx-2">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('orders.destroy',$order)}}">
                            <x-jet-button type="submit" class="mt-4 bg-red-800 hover:bg-red-600">Delete</x-jet-button>
                        </a>
                    </form>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
