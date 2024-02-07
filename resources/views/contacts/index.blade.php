<x-layout>
    <div class="mb-6 flex items-center justify-between">
        <h1 class="text-3xl">Contact List</h1>
        <a class="rounded bg-blue-500 px-5 py-3" href="{{ route('contacts.create') }}">New Contact</a>
    </div>

    <x-table :contacts="$contacts" />

    <div class="mt-5">
        {{ $contacts->links() }}
    </div>

</x-layout>
