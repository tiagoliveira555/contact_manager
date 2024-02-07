<div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
        <div class="inline-block min-w-full p-1.5 align-middle">
            <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">

                    <x-table.thead />

                    @foreach ($contacts as $contact)
                        <x-table.tbody id="{{ $contact->id }}" name="{{ $contact->name }}"
                            contact="{{ $contact->contact }}" email="{{ $contact->email }}" />
                    @endforeach

                </table>
            </div>
        </div>
    </div>
</div>