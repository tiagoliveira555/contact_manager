<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contacts.index', ['contacts' => Contact::paginate(10)]);
    }
    
    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        dd('chegou');
    }
}
