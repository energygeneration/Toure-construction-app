<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\ContactsController;

class ContactsController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $this->validate($request,
        [
            'first_name' => 'bail|required',
            'last_name' => 'bail|required',
            'email' => 'bail|required|email',
            'phone' => 'bail|required',
            'date' => 'bail|required',
            'heure' => 'bail|required',
        ]);
        $contact = new Contact();
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->date = $request->date;
        $contact->heure = $request->heure;
        $contact->save();
        return "C'est bien enregistré !";
    }
public function contact(){

    $contacts= Contact::all();
    return view('liste-rendez-vous', compact('contacts'));

}

}
