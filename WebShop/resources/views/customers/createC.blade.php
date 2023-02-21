<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">

        <h2> Bitte geben sie ihre Daten ein</h2>

        <form action="{{route('continue') }}" method="POST">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}"/>
                <x-jet-input type="text" name="name" placeholder="{{ __('Full Name') }}" value="{{ old('name')}}"
                             class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                />
                @error('name') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div>
                <x-jet-label for="street" value="{{ __('Street and Number') }}"/>
                <x-jet-input type="text" name="street" placeholder="{{ __('Street and Number') }}"
                             value="{{ old('street')}}"
                             class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                />
                @error('street') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div>
                <x-jet-label for="postal" value="{{ __('Postal') }}"/>
                <x-jet-input type="text" name="postal" placeholder="{{ __('Postal Code') }}" value="{{ old('postal')}}"
                             class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                />
                @error('postal') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}"/>
                <x-jet-input type="email" name="email" placeholder="{{ __('E-Mail Adress') }}" value="{{ old('email')}}"
                             class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                />
                @error('email') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div>
                <x-jet-label for="bday" value="{{ __('Birthday') }}"/>
                <x-jet-input type="date" name="bday" placeholder="{{ __('Birthday') }}" value="{{ old('bday')}}"
                             class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                />
                @error('date') <span class="error">{{ $message }}</span> @enderror
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <x-jet-button type="submit" class="mt-4">Proceed to Order</x-jet-button>
            </div>

        </form>
    </div>
</x-app-layout>
