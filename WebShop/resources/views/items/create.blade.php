<x-app-layout>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Item</h2>
            </div>
            <div class="pull-right">
                <a  href="{{ route('items.index') }}"><x-jet-button>Back</x-jet-button> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('items.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div >
                    <strong>Title:</strong>
                    <input type="text" name="title"  placeholder="Title"
                           class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>Category:</strong>
                    <select name="category_id"  placeholder="Category"
                           class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    >
                    @foreach($categories as $Category)
                        <option value="{{$Category->id}}">{{$Category->name}}</option>
                    @endforeach
                    </select>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div >
                    <strong>Description:</strong>
                    <textarea  name="desc" placeholder="Item Description"
                               class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    ></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price:</strong>
                    <input type="text" name="price"  placeholder="Price"
                           class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image 1:</strong>
                    <input type="text" name="img1"  placeholder="Image 1"
                           class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image 2:</strong>
                    <input type="text" name="img2"  placeholder="Image 2"
                           class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image 3:</strong>
                    <input type="text" name="img3" placeholder="Image 3"
                           class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pieces to add:</strong>
                    <input type="text" name="pcs" placeholder="Pieces"
                           class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <x-jet-button type="submit">Create Item</x-jet-button>
            </div>
        </div>
    </form>
</x-app-layout>
