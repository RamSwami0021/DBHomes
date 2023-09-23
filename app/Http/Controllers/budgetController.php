<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\budget;

class budgetController extends Controller
{
    public function adminBudget()
    {
        $data = budget::all();
        return view('/DBHomesAdmin/budget', compact('data'));
    }
    public function adminBudgetDelete($id)
{
    $data = budget::findOrFail($id);
    $data->delete();
    return redirect()->route('admin.budget')->with('success', 'Budget deleted successfully.');
}
public function adminBudgetSubmit(Request $request)
{
    $validatedData = $request->validate([
        'min' => 'required|string|max:255',
        'max' => 'required|string|max:255',
    ]);
    $budget = budget::create($validatedData);
    return redirect()->route('admin.budget')->with('success', 'Budget added successfully.');
}
}
