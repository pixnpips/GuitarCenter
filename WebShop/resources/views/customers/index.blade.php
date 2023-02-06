<x-app-layout>
    @foreach ($customers as $Customer)
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8 flex-lg-row">
        <div>
            <h2>{{$Customer->id}}</h2>
        </div>
        <div>
            <h2>{{$Customer->name}}</h2>
        </div>
        <div>
            <h2>{{$Customer->date}}</h2>
        </div>

    </div>
    @endforeach
</x-app-layout>
