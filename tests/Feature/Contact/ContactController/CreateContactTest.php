<?php

namespace Tests\Feature;

use App\Models\Contact;
use Tests\TestCase;

class CreateContactTest extends TestCase
{
    public function test_store_method_fails_with_invalid_data(): void
    {
        $response = $this->post(route('contacts.store'), [
            'name' => 'short', // short name'
            'contact' => '123456', // contact with less than 9 digits'
            'email' => 'invalid-email', // invalid e-mail'
        ]);

        $response->assertSessionHasErrors(['name', 'contact', 'email']);
    }
    
    public function test_store_method_fails_with_duplicate_data()
    {
        $existingContact = Contact::factory()->create();

        $response = $this->post(route('contacts.store'), [
            'name' => $existingContact->name,
            'contact' => $existingContact->contact,
            'email' => $existingContact->email,
        ]);

        $response->assertSessionHasErrors(['contact', 'email']);
    }

}
