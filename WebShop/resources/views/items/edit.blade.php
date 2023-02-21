<x-app-layout>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1 class="">Edit Item</h1>
            </div>
            <div >
                <strong>Item Number:</strong> {{$item->id}}  <strong>Model:</strong> {{ $item->title }}
            </div>
        </div>
    </div>


    <form action="{{ route('items.update',$item->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="title" class="col-md-4 col-form-label text-md-right"><strong>Item Title</strong></label>
        <input type="text" name="title" placeholder="{{ __('Model') }}" value="{{ $item->title }}"
               class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
        >
        @error('title') <span class="error">{{ $message }}</span> @enderror

        <div class="col-xs-12 col-sm-12 col-md-12">
            <label for="category_id" class="col-md-4 col-form-label text-md-right"><strong>Category</strong></label>
            <select name="category_id"  placeholder="Category" option="{{$item->category_id}}"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >   <option selected="selected" value="{{$item->category->id}}">{{$item->category->name}}</option>
                @foreach($categories as $Category)
                    <option value="{{$Category->id}}">{{$Category->name}}</option>
                @endforeach
            </select>
        </div>

        <label for="desc" class="col-md-4 col-form-label text-md-right"><strong>Description</strong></label>
        <textarea  name="desc" placeholder="{{ __('Description') }}"
                   class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
        >{{ $item->desc }}</textarea>
        @error('desc') <span class="error">{{ $message }}</span> @enderror


        <label for="price" class="col-md-4 col-form-label text-md-right"><strong>Price</strong></label>
        <input type="text" name="price" placeholder="{{ __('Price') }}" value="{{ $item->price }}"
               class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
        >
        @error('price') <span class="error">{{ $message }}</span> @enderror

        <label for="img1" class="col-md-4 col-form-label text-md-right"><strong>Image 1</strong></label>
        <input type="text" name="img1" placeholder="{{ __('Image 1') }}" value="{{ $item->img1 }}"
               class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
        >

        <label for="img2" class="col-md-4 col-form-label text-md-right"><strong>Image 2</strong></label>
        <input type="text" name="img2" placeholder="{{ __('Image 2') }}" value="{{ $item->img2 }}"
               class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
        >

        <label for="img3" class="col-md-4 col-form-label text-md-right"><strong>Image 3</strong></label>
        <input type="text" name="img3" placeholder="{{ __('Image 3') }}" value="{{ $item->img3 }}"
               class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
        >

        <div class="form-group row">
            <label for="imgSrc1" class="col-md-4 col-form-label text-md-right"><strong>Image upload (3 max.):</strong></label>
            <div class="col-md-6">
                <input id="imgSrc1" type="file" class="form-control" name="imgSrc1[]" multiple>
            </div>
        </div>

        <div>
            <img src="{{$item->img1}}">
            <img src="{{$item->img2}}">
            <img src="{{$item->img3}}">
        </div>

        <input type="text" name="pcs" placeholder="{{ __('Pieces') }}" value="{{ $item->pcs}}"
               class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
        >

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <x-jet-button type="submit" class="mt-4">Update Item</x-jet-button>
        </div>


    </form>
    <div class="pull-right">
        <a href="{{ route('items.index') }}"> <x-jet-button class="mt-4">Back</x-jet-button></a>
    </div>


</x-app-layout>
