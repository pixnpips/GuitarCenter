

<x-app-layout>

    <div class="w-1/2 mx-auto p-4 sm:p-6 lg:p-8">
       <h1 class="text-2xl">Edit Category {{$category->id}}</h1>

           <div class="">
               <form  action="{{route('categories.update',$category->id) }}" method="POST" enctype="multipart/form-data">
                   @csrf
                   @method('PUT')

                   <label for="name" class="col-md-4 col-form-label text-md-right"><strong>Category Name:</strong></label>
                   <x-jet-input type="text" name="name" placeholder="{{ __('Categoriy Name') }}" value="{{$category->name}}"
                          class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                   />
                   @error('name') <span class="error">{{ $message }}</span> @enderror

                   <div class="my-2">
                       <div >
                           <strong>Description:</strong>
                           <textarea  name="desc" placeholder="Category Description"
                                      class="block h-80 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                           >{{$category->desc}}</textarea>
                       </div>
                   </div>
                   @error('desc') <span class="error">{{ $message }}</span> @enderror

                   <div class="my-2">
                       <label for="imgSrc" class="col-md-4 col-form-label text-md-right"><strong>Category Image:</strong></label>
                       <div class="col-md-6">
                           <x-jet-input id="imgSrc" type="file" class="form-control" name="imgSrc"/>
                       </div>
                   </div>
                   @error('imgSrc') <span class="error">{{ $message }}</span> @enderror

                   <div class="my-2  p-2 bg-slate-300">
                       <img src="{{$category->img}}">
                   </div>

                   <div class="">
                       <x-jet-button type="submit" class="mt-4">Update Category</x-jet-button>
                   </div>
               </form>
           </div>

      <a href="{{route('categories.index')}}"><x-jet-button  class="mt-4">Back</x-jet-button></a>
   </div>
</x-app-layout>
