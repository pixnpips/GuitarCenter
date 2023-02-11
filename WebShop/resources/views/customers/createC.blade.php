<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">

        <h2> Item: {{$item->title}}</h2>

        <form  action="{{ route('customer.continue') }}" method="POST">
            @csrf

            <input type="text" name="name" placeholder="{{ __('Full Name') }}"
                   class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >
            @error('name') <span class="error">{{ $message }}</span> @enderror

            <input type="text" name="street" placeholder="{{ __('Street and Number') }}"
                   class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >
            @error('street') <span class="error">{{ $message }}</span> @enderror

            <input type="text" name="postal" placeholder="{{ __('Postal Code') }}"
                   class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >
            @error('postal') <span class="error">{{ $message }}</span> @enderror

            <input type="email" name="email" placeholder="{{ __('E-Mail Adress') }}"
                   class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >
            @error('email') <span class="error">{{ $message }}</span> @enderror

            <input type="date" name="bday" placeholder="{{ __('Birthday') }}"
                   class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >
            @error('date') <span class="error">{{ $message }}</span> @enderror

            <input type="password" name="password1" placeholder="{{ __('Password') }}"
                   class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >

            <input type="password" name="password2" placeholder="{{ __('Repeat Password') }}"
                   class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >
            @error('password2') <span class="error">{{ $message }}</span> @enderror

            <input type="hidden" name="itemid" value="{{$item->id}}">

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <x-jet-button type="submit" class="mt-4">Proceed to Order</x-jet-button>
            </div>
        </form>
    </div>
</x-app-layout>
