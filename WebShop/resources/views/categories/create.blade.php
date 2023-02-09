<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form  action="{{ route('categories.store') }}" method="POST">
            @csrf
{{--            <textarea--}}
{{--                name="message" placeholder="{{ __('What\'s on your mind?') }}"--}}
{{--                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"--}}
{{--            >{{ old('message') }}</textarea>--}}

            <input type="text" name="name" placeholder="{{ __('Categoriy Name') }}"
                   class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >
            @error('name') <span class="error">{{ $message }}</span> @enderror

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div >
                    <strong>Description:</strong>
                    <textarea  name="desc" placeholder="Item Description"
                               class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    ></textarea>
                </div>
            </div>
            @error('street') <span class="error">{{ $message }}</span> @enderror

            <input type="text" name="img" placeholder="{{ __('Picture') }}"
                   class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >
            @error('postal') <span class="error">{{ $message }}</span> @enderror

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <x-jet-button type="submit" class="mt-4">Store</x-jet-button>
            </div>
        </form>
    </div>
</x-app-layout>
