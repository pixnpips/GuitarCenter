<x-app-layout>

    <div class="mx-4 w-36">
        <a href="{{URL('/')}}" class=" p-4" >
            <img src="{{url('/GuitarCenterLogo.png')}}" class=" ">
        </a>
    </div>
    <div class="p-4 w-1/2 mx-auto">

        <h2 class="text-2xl"> Please enter your Data to proceed</h2>

        <div class="">
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
                    <x-jet-button type="submit" class=" my-2 bg-green-600 hover:bg-lime-400">Proceed to Order</x-jet-button>
                </div>

            </form>
        </div>

        <a href="{{ url()->previous()}}"> <x-jet-button>Back</x-jet-button></a>
    </div>
</x-app-layout>
