<x-layout>
    <form action="{{route('contacts.search')}}" class="flex flex-col gap-3 max-w-2xs justify-center">
        @csrf
        <label for="contact">Contact Name</label>
        <input type="text"
               name="contact"
               class="px-2 py-1 rounded-2xl border"
               placeholder="Search for a contact" />
    </form>
    <div class="grid grid-cols-5">
        @foreach($contacts as $contact)
            <div class="flex flex-col gap-2">
                <a href="{{ route('contacts.show', $contact->id) }}">
                    {{$contact->name}}
                </a>
                <span class="text-xs text-gray-400">
                    {{$contact->phone}}
                </span>
            </div>
        @endforeach
    </div>
    <div class="flex justify-end">
        <a href="{{ route('contacts.create') }}">Create a new Contact</a>
    </div>
</x-layout>
