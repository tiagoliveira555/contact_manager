<?php

namespace Tests\Feature;

use App\Models\Contact;
use Illuminate\Contracts\Pagination\Paginator;
use Tests\TestCase;

class ContactIndexTest extends TestCase
{
    public function test_should_be_listed_all_contacts_paginated(): void
    {
        Contact::factory()->count(20)->create();

        $response = $this->get('/contacts');
        $response->assertOk();
        $response->assertViewIs('contacts.index');
        $contacts = $response->viewData('contacts');

        $this->assertInstanceOf(Paginator::class, $contacts);
    }
}
