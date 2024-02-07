<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ContactController extends Controller
{
    public function index()
    {
        return view('contacts.index', ['contacts' => Contact::paginate(10)]);
    }
    
    public function show(Contact $contact)
    {
        return view('contacts.show', compact('contact'));
    }
    
    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $contactValidated = $request->validate([
            'name' => ['required', 'min:6', 'max:255'],
            'contact' => ['required', 'digits:9', Rule::unique('contacts', 'contact')],
            'email' => ['required', 'email', 'max:255', Rule::unique('contacts', 'email')],
        ]);

        Contact::query()->create($contactValidated);

        return redirect(route('contacts.index'));
    }
    
    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }
    
    public function update(Request $request, Contact $contact)
    {
        $contactValidated = $request->validate([
            'name' => ['required', 'min:6', 'max:255'],
            'contact' => ['required', 'digits:9', Rule::unique('contacts')->ignore($contact->id)],
            'email' => ['required', 'email', 'max:255', Rule::unique('contacts')->ignore($contact->id)],
        ]);

        Contact::query()->where('id', $contact->id)->update($contactValidated);

        return redirect(route('contacts.index'));
    }
}
