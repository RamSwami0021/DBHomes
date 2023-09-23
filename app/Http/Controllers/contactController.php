<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\contact;

class contactController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $contact = contact::where('user_id', $user_id)->get();
        return view('/DBHomesUsers/contact', compact('contact'));
    }
    public function contact()
    {
        $contact = contact::all();
        return view('/DBHomesAdmin/contact', compact('contact'));
    }
    public function destroy($id)
    {
        $contact = contact::findOrFail($id);
        $contact->delete();
        return view('/contact');
    }
    public function edit($id)
{
    $contact = contact::findOrFail($id);
    return view('/DBHomesUsers/contactDetails', compact('contact'));
}
public function update(Request $request, $id)
{
    // Validate the user input
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'contact_no' => 'required|string|max:20',
    ]);
    $loan = $request->has('loan') ? true : false;


    // Find the record by ID
    $contact = contact::find($id);

    // Update the record with validated data
    $contact->update(array_merge($validatedData, ['loan' => $loan]));

    // Redirect back to the details page with a success message
    return view('DBHomesUsers/contactDetails', compact('contact'));
}

public function adminContactDelete($id)
    {
        $contact = contact::findOrFail($id);
        $contact->delete();
        return view('/admin/contact');
    }
    public function adminContactEdit($id)
    {
        $contact = contact::findOrFail($id);
        return view('/DBHomesAdmin/contactDetails', compact('contact'));
    }
    public function adminContactUpdate(Request $request, $id)
    {
        // Validate the user input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact_no' => 'required|string|max:20',
        ]);
        $loan = $request->has('loan') ? true : false;
    
    
        // Find the record by ID
        $contact = contact::find($id);
    
        // Update the record with validated data
        $contact->update(array_merge($validatedData, ['loan' => $loan]));
    
        // Redirect back to the details page with a success message
        return view('/DBHomesAdmin/contactDetails', compact('contact'));
    }
    public function enquirySubmit(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'contact_no' => 'required|string|max:20',
    ]);
    $loan = $request->has('loan') ? true : false;
    return view('/', ['success' => 'Form submitted successfully.']);
}
}
