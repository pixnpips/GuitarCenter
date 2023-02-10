

<x-app-layout>
    <div class="pull-right">
        <h2>Order Edit</h2>
    </div>

{{--   <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">--}}
{{--       <h1>Edit Customer</h1>--}}
{{--       <form  action=" {{route('customers.update',$Customer->id)}}" method="POST">--}}

{{--           @csrf--}}
{{--            <textarea--}}
{{--                name="message" placeholder="{{ __('What\'s on your mind?') }}"--}}
{{--                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"--}}
{{--            >{{ old('message') }}</textarea>--}}
{{--           @method('PUT')--}}

{{--           <input type="text" name="name" placeholder="{{ __('Full Name') }}" value="{{$Customer->name}}"--}}
{{--                  class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"--}}
{{--           >--}}
{{--           @error('name') <span class="error">{{ $message }}</span> @enderror--}}

{{--           <input type="text" name="street" placeholder="{{ __('Street and Number') }}" value="{{$Customer->street}}"--}}
{{--                  class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"--}}
{{--           >--}}
{{--           @error('street') <span class="error">{{ $message }}</span> @enderror--}}

{{--           <input type="text" name="postal" placeholder="{{ __('Postal Code') }}" value="{{$Customer->postal}}"--}}
{{--                  class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"--}}
{{--           >--}}
{{--           @error('postal') <span class="error">{{ $message }}</span> @enderror--}}

{{--           <input type="email" name="email" placeholder="{{ __('E-Mail Adress') }}" value="{{$Customer->email}}"--}}
{{--                  class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"--}}
{{--           >--}}
{{--           @error('email') <span class="error">{{ $message }}</span> @enderror--}}

{{--           <input type="date" name="bday" placeholder="{{ __('Birthday') }}" value="{{$Customer->bday}}"--}}
{{--                  class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"--}}
{{--           >--}}
{{--           @error('date') <span class="error">{{ $message }}</span> @enderror--}}

{{--           <input type="password" name="password1" placeholder="{{ __('Password') }}" value="{{$Customer->password1}}"--}}
{{--                  class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"--}}
{{--           >--}}
{{--           <input type="password" name="password2" placeholder="{{ __('Repeat Password') }}"--}}
{{--                  class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"--}}
{{--           >--}}
{{--           @error('password2') <span class="error">{{ $message }}</span> @enderror--}}

{{--           @error('password2') <span class="error">{{ $message }}</span> @enderror--}}

{{--           <x-jet-button type="submit" class="mt-4">Update Customer</x-jet-button>--}}

{{--       </form>--}}

{{--      <a href="{{route('customers.index')}}"><x-jet-button :link="route('customers.index')" class="mt-4">Back</x-jet-button></a>--}}
{{--   </div>--}}
</x-app-layout>
