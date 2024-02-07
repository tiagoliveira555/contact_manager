<x-layout>

    <div class="mx-auto flex w-64 flex-col gap-6">
        <div class="flex items-center justify-between">
            <h1 class="text-3xl">Contact</h1>
            <a href="{{ route('contacts.index') }}"
                class="cursor-pointer rounded bg-gray-500 px-2 py-1 text-sm font-semibold text-white hover:bg-gray-600 disabled:pointer-events-none disabled:opacity-50">
                Go Back
            </a>
        </div>

        <div>
            <h2>Id: </h2>
            <p class="text-sm">{{ $contact->id }}</p>
        </div>

        <div>
            <h2>Name: </h2>
            <p class="text-sm">{{ $contact->name }}</p>
        </div>

        <div>
            <h2>Contact: </h2>
            <p class="text-sm">{{ $contact->contact }}</p>
        </div>

        <div>
            <h2>Email: </h2>
            <p class="text-sm">{{ $contact->email }}</p>
        </div>

        <div>
            <a href="{{ route('contacts.edit', ['contact' => $contact->id]) }}"
                class="mr-4 inline-flex items-center gap-x-2 rounded-lg border border-transparent bg-blue-600 px-4 py-3 text-sm font-semibold text-white hover:bg-blue-700 disabled:pointer-events-none disabled:opacity-50">
                Edit
            </a>
            <a href="{{ route('contacts.delete', ['contact' => $contact->id]) }}"
                class="inline-flex cursor-pointer items-center gap-x-2 rounded-lg border border-transparent bg-red-500 px-4 py-3 text-sm font-semibold text-white hover:bg-gray-600 disabled:pointer-events-none disabled:opacity-50">
                Delete
            </a>
        </div>
    </div>

</x-layout>
