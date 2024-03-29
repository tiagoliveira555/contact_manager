@props(['title', 'name' => null, 'contact' => null, 'email' => null, 'method' => 'post', 'action' => null])

<div class="mx-auto w-1/2">
    <h1 class="mb-10 text-3xl">{{ $title }}</h1>

    <form class="flex flex-col gap-3" action="{{ $action }}" method="POST">
        @csrf

        @if ($method === 'put')
            @method('put')
        @endif

        <div>
            <label for="name">Name</label>
            <input type="name" id="name" name="name"
                class="mt-2 block w-full rounded-lg border-gray-200 bg-gray-600 px-4 py-3" placeholder="contact name"
                value="{{ old('name') ?? $name }}">
            @error('name')
                <span class="text-red-400">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="contact">Contact</label>
            <input type="text" id="contact" name="contact"
                class="mt-2block w-full rounded-lg border-gray-200 bg-gray-600 px-4 py-3" placeholder="contact"
                value="{{ old('contact') ?? $contact }}">
            @error('contact')
                <span class="text-red-400">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="email">Email</label>
            <input type="text" id="email" name="email"
                class="mt-2 block w-full rounded-lg border-gray-200 bg-gray-600 px-4 py-3" placeholder="email"
                value="{{ old('email') ?? $email }}">
            @error('email')
                <span class="text-red-400">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <button type="submit"
                class="inline-flex items-center gap-x-2 rounded-lg border border-transparent bg-blue-600 px-4 py-3 text-sm font-semibold text-white hover:bg-blue-700 disabled:pointer-events-none disabled:opacity-50">
                Save
            </button>
            <a href="{{ route('contacts.index') }}"
                class="inline-flex cursor-pointer items-center gap-x-2 rounded-lg border border-transparent bg-gray-500 px-4 py-3 text-sm font-semibold text-white hover:bg-gray-600 disabled:pointer-events-none disabled:opacity-50">
                Cancel
            </a>
        </div>

    </form>
</div>
