<?php

namespace Tests\Feature;

use App\Models\Contact;
use Tests\TestCase;

class UpdateContactTest extends TestCase
{
    public function test_update_method_fails_with_invalid_data()
    {
        $existingContact = Contact::factory()->create();

        $response = $this->put(route('contacts.update', ['contact' => $existingContact->id]), [
            'name' => 'short', // short name'
            'contact' => '123456', // contact with less than 9 digits'
            'email' => 'invalid-email', // invalid e-mail'
        ]);

        $response->assertSessionHasErrors(['name', 'contact', 'email']);
    }
    
    public function test_update_method_fails_with_duplicate_data()
    {
        $existingContact1 = Contact::factory()->create();
        $existingContact2 = Contact::factory()->create();

        $response = $this->put(route('contacts.update', ['contact' => $existingContact1->id]), [
            'name' => $existingContact2->name,
            'contact' => $existingContact2->contact,
            'email' => $existingContact2->email,
        ]);

        $response->assertSessionHasErrors(['contact', 'email']);
    }
}