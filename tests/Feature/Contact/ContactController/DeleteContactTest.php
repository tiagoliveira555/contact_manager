<?php

namespace Tests\Feature;

use App\Models\Contact;
use Tests\TestCase;

class DeleteContactTest extends TestCase
{
    public function test_delete_method_soft_deletes_contact()
    {
        $contact = Contact::factory()->create();

        $this->delete(route('contacts.destroy', ['contact' => $contact->id]));

        $this->assertSoftDeleted('contacts', ['id' => $contact->id]);
    }
}
