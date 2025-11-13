<x-layout>
    <h1>Create a new Contact</h1>
    <form action="{{ route('contacts.store')}}" method="post" class="flex flex-col gap-5">
        @csrf
        <label for="name">Name:</label>
        <input name="name" type="text" class="px-2 py-1 rounded-2xl border max-w-2xl" />
        <label for="phone">Number:</label>
        <input name="phone" type="number" class="px-2 py-1 rounded-2xl border max-w-2xl" />
        <label for="email">Email:</label>
        <input name="email" type="email" class="px-2 py-1 rounded-2xl border max-w-2xl" />
        <button type="submit">Create</button>
    </form>
</x-layout>
