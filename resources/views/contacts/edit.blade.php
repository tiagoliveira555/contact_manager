<x-layout>

    <x-form title="Edit Contact" name="{{ $contact->name }}" contact="{{ $contact->contact }}" email="{{ $contact->email }}"
        method="put" action="{{ route('contacts.update', ['contact' => $contact->id]) }}" />

</x-layout>
