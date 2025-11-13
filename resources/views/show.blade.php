<x-layout>

            <div class="flex flex-col gap-2">
                <span>
                    {{$contact->name}}
                </span>
                <span class="text-xs text-gray-400">
                    {{$contact->phone}}
                </span>
            </div>

    <div class="flex justify-end">
        <a href="{{ route('contacts.edit', $contact->id) }} " class="text-blue-500 text-sm font-bold hover:cursor-pointer px-2 py-1">Edit</a>
        <button form="delete-form" class="text-red-500 text-sm font-bold hover:cursor-pointer px-2 py-1">Delete</button>
    </div>

    <form action="{{ route('contacts.destroy', $contact->id) }}" method="post" class="hidden" id="delete-form">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
