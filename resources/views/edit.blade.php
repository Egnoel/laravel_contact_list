<x-layout>
    <h1>Create a new Contact</h1>
    <form action="{{ route('contacts.update', $contact->id)}}" method="post" class="flex flex-col gap-5">
        @csrf
        @method('PATCH')
        <label for="name">Name:</label>
        <input name="name"
               type="text"
               value="{{$contact->name}}"
               class="px-2 py-1 rounded-2xl border max-w-2xl" />
        <label for="phone">Number:</label>
        <input name="phone"
               type="number"
               value="{{$contact->phone}}"
               class="px-2 py-1 rounded-2xl border max-w-2xl" />
        <label for="email">Email:</label>
        <input name="email"
               type="email"
               value="{{$contact->email}}"
               class="px-2 py-1 rounded-2xl border max-w-2xl" />
        <div class="flex justify-end gap-5">
            <a href="{{ route('contacts.show', $contact->id) }}" class="text-sm font-bold hover:cursor-pointer px-2 py-1" >Cancel</a>
            <button type="submit" class="text-blue-500 text-sm font-bold hover:cursor-pointer px-2 py-1">Update</button>
        </div>
    </form>
</x-layout>
