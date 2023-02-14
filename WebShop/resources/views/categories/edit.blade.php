

<x-app-layout>

   <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
       <h1>Edit Category {{$category->id}}</h1>



           <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
               <form  action="{{route('categories.update',$category->id) }}" method="POST" enctype="multipart/form-data">

                   @csrf
                   @method('PUT')
                   <input type="text" name="name" placeholder="{{ __('Categoriy Name') }}" value="{{$category->name}}"
                          class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                   >
                   @error('name') <span class="error">{{ $message }}</span> @enderror

                   <div class="col-xs-12 col-sm-12 col-md-12">
                       <div >
                           <strong>Description:</strong>
                           <textarea  name="desc" placeholder="Category Description"
                                      class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                           >{{$category->desc}}</textarea>
                       </div>
                   </div>
                   @error('desc') <span class="error">{{ $message }}</span> @enderror

                   <div class="form-group row">
                       <label for="imgSrc" class="col-md-4 col-form-label text-md-right"><strong>Category Image:</strong></label>
                       <div class="col-md-6">
                           <input id="imgSrc" type="file" class="form-control" name="imgSrc">
                           {{--                        <code>{{ auth()->user()->image }}</code>--}}
                       </div>
                   </div>
                   @error('imgSrc') <span class="error">{{ $message }}</span> @enderror

{{--                   <input type="text" name="img" placeholder="{{ __('Picture') }}" value="{{$category->img}}"--}}
{{--                          class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"--}}
{{--                   >--}}
{{--                   @error('img') <span class="error">{{ $message }}</span> @enderror--}}

                   <div>
                       <img src="{{$category->img}}">
                   </div>

                   <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                       <x-jet-button type="submit" class="mt-4">Update Category</x-jet-button>
                   </div>
               </form>
           </div>

      <a href="{{route('categories.index')}}"><x-jet-button  class="mt-4">Back</x-jet-button></a>
   </div>
</x-app-layout>
