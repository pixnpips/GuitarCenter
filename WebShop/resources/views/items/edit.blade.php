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

    {{-------------------------------------Hier interessant wie wir mehrere Errors der Form zusammenfassen können--}}
{{--    @if ($errors->any())--}}
{{--        <div class="alert alert-danger">--}}
{{--            <ul>--}}
{{--                @foreach ($errors->all() as $error)--}}
{{--                    <li>{{ $error }}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    @endif--}}


    <form action="{{ route('items.update',$item->id) }}" method="POST">
        @csrf

        @method('PUT')

        <input type="text" name="title" placeholder="{{ __('Model') }}" value="{{ $item->title }}"
               class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
        >
        @error('street') <span class="error">{{ $message }}</span> @enderror

        <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>Category:</strong>
            <select name="category_id"  placeholder="Category" option="{{$item->category_id}}"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >   <option selected="selected" value="{{$item->category->id}}">{{$item->category->name}}</option>
                @foreach($categories as $Category)
                    <option value="{{$Category->id}}">{{$Category->name}}</option>
                @endforeach
            </select>
        </div>

        <textarea  name="desc" placeholder="{{ __('Description') }}"
                   class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
        >{{ $item->desc }}</textarea>
        @error('desc') <span class="error">{{ $message }}</span> @enderror



        <input type="text" name="price" placeholder="{{ __('Price') }}" value="{{ $item->price }}"
               class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
        >
        @error('postal') <span class="error">{{ $message }}</span> @enderror


        <input type="text" name="img1" placeholder="{{ __('Image 1') }}" value="{{ $item->img1 }}"
               class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
        >
        @error('img1') <span class="error">{{ $message }}</span> @enderror

        <input type="text" name="img2" placeholder="{{ __('Image 2') }}" value="{{ $item->img2 }}"
               class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
        >
        @error('date') <span class="error">{{ $message }}</span> @enderror

        <input type="text" name="img3" placeholder="{{ __('Image 3') }}" value="{{ $item->img3 }}"
               class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
        >
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
