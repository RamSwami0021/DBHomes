<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\enquiry;

class enquiryController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $enquiry = enquiry::where('user_id', $user_id)->get();
        return view('/DBHomesUsers/enquiry', compact('enquiry'));
    }
    public function enquiry()
    {
        $enquiry = enquiry::all();
        return view('/DBHomesAdmin/enquiry', compact('enquiry'));
    }
    public function destroy($id)
    {
        $enquiry = enquiry::findOrFail($id);
        $enquiry->delete();
        return view('/enquiry');
    }
    public function edit($id)
{
    $enquiry = enquiry::findOrFail($id);
    return view('/DBHomesUsers/enquiryDetails', compact('enquiry'));
}
public function update(Request $request, $id)
{
    // Validate the user input
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'contact_no' => 'required|string|max:20',
    ]);
    // Find the record by ID
    $enquiry = enquiry::find($id);

    // Update the record with validated data
    $enquiry->update($validatedData);

    // Redirect back to the details page with a success message
    return view('DBHomesUsers/enquiryDetails', compact('enquiry'));
}
public function adminEnquiryDelete($id)
{
    $enquiry = enquiry::findOrFail($id);
    $enquiry->delete();
    return view('/enquiry');
}
public function adminEnquiryEdit($id)
{
$enquiry = enquiry::findOrFail($id);
return view('/DBHomesAdmin/enquiryDetails', compact('enquiry'));
}
public function adminContactUpdate(Request $request, $id)
{
    try {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact_no' => 'required|string|max:20',
        ]);

        $enquiry = Enquiry::where('id', $id)->first();

        if ($enquiry) {
            $enquiry->update($validatedData);
            return view('/DBHomesAdmin/enquiryDetails', compact('enquiry'));
        } else {
            // Handle the case where the record was not found
            return redirect()->back()->with('error', 'Enquiry not found.');
        }
    } catch (\Exception $e) {
        // Handle the exception (e.g., log or return an error response)
        return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
    }
}
public function enquirySubmit(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'contact_no' => 'required|string|max:20',
    ]);
    if ($validator->fails()) {
        return view('/', ['errors' => $validator->errors()]);
    }
    return view('/', ['success' => 'Form submitted successfully.']);
}
}
