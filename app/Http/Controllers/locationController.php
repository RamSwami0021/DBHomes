<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\location;

class locationController extends Controller
{
    public function adminLocation()
    {
        $data = location::all();
        return view('/DBHomesAdmin/location', compact('data'));
    }
    public function adminLocationDelete($id)
{
    $data = location::findOrFail($id);
    $data->delete();
    return redirect()->route('admin.location')->with('success', 'Location deleted successfully.');
}
    public function adminLocationSubmit(Request $request)
{
    $validatedData = $request->validate([
        'location' => 'required|string|max:255',
    ]);
    $location = Location::create($validatedData);
    return redirect()->route('admin.location')->with('success', 'Location added successfully.');
}
}
