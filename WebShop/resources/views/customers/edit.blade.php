<x-app-layout>

    <div class="w-1/2 mx-auto p-4 sm:p-6 lg:p-8">
        <h1 class="text-2xl">Edit Customer</h1>
        <form action=" {{route('customers.update',$Customer->id)}}" method="POST">

            @csrf

            @method('PUT')

            <div class="my-2" >

                <label for="name" class="col-md-4 col-form-label text-md-right"><strong>Full name:</strong></label>
                <x-jet-input type="text" name="name" placeholder="{{ __('Full Name') }}" value="{{$Customer->name}}"
                             class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                />
                @error('name') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="my-2">

                <label for="street" class="col-md-4 col-form-label text-md-right"><strong>Street and Number:</strong></label>
                <x-jet-input type="text" name="street" placeholder="{{ __('Street and Number') }}"
                             value="{{$Customer->street}}"
                             class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                />
                @error('street') <span class="error">{{ $message }}</span> @enderror

            </div>
            <div class="my-2">
                <label for="postal" class="col-md-4 col-form-label text-md-right"><strong>Postal:</strong></label>
                <x-jet-input type="text" name="postal" placeholder="{{ __('Postal Code') }}"
                             value="{{$Customer->postal}}"
                             class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                />
                @error('postal') <span class="error">{{ $message }}</span> @enderror

            </div>

            <div class="my-2">
                <label for="email" class="col-md-4 col-form-label text-md-right"><strong>Email:</strong></label>
                <x-jet-input type="email" name="email" placeholder="{{ __('E-Mail Adress') }}"
                             value="{{$Customer->email}}"
                             class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                />
                @error('email') <span class="error">{{ $message }}</span> @enderror

            </div>

            <div class="my-2">

                <label for="bday" class="col-md-4 col-form-label text-md-right"><strong>Birthday:</strong></label>
                <x-jet-input type="date" name="bday" placeholder="{{ __('Birthday') }}" value="{{$Customer->bday}}"
                             class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                />
                @error('date') <span class="error">{{ $message }}</span> @enderror

            </div>


            <x-jet-button type="submit" class="mt-4">Update Customer</x-jet-button>

        </form>

        <a href="{{route('customers.index')}}">
            <x-jet-button :link="route('customers.index')" class="mt-4">Back</x-jet-button>
        </a>
    </div>
</x-app-layout>
