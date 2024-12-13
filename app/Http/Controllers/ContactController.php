<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contct()
    {
        $contacts = Contact::all(); // Fetch all contacts
        return view('admin.cntctadmin', compact('contacts'));
    }
    
    // Delete a contact enquiry
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
    
        return redirect()->route('admin.contacts.contact')->with('success', 'Contact deleted successfully.');
    }
}
