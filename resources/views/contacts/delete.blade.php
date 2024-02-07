<x-layout>

    <div class="mx-auto w-1/2">
        <h1 class="mb-10 text-3xl">Delete Contact</h1>

        <h2>Are you sure you want to delete contact <span class="text-red-300">{{ $contact->name }}</span>?</h2>


        <div class="mt-10 flex items-center">
            <form action="{{ route('contacts.destroy', ['contact' => $contact->id]) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit"
                    class="mr-4 inline-flex cursor-pointer items-center gap-x-2 rounded-lg border border-transparent bg-red-500 px-4 py-3 text-sm font-semibold text-white hover:bg-gray-600 disabled:pointer-events-none disabled:opacity-50">
                    Delete
                </button>
            </form>
            <a href="{{ route('contacts.index') }}"
                class="inline-flex items-center gap-x-2 rounded-lg border border-transparent bg-gray-600 px-4 py-3 text-sm font-semibold text-white hover:bg-blue-700 disabled:pointer-events-none disabled:opacity-50">
                Cancel
            </a>
        </div>

    </div>

</x-layout>
