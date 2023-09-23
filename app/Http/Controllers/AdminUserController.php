<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class AdminUserController extends Controller
{
    public function adminUser()
    {
        $users = user::all();
        return view('/DBHomesAdmin/User', compact('users'));
    }
    public function adminUserDestroy($id)
    {
        $post = user::findOrFail($id);
        $post->delete();
    
        return redirect()->route('admin.user');
    }
    public function adminUserEdit($id)
    {
        $user = user::findOrFail($id);
        return view('/DBHomesAdmin/userDetails', compact('user'));
    }
    public function adminUserUpdate(Request $request, $post)
    {
        $data = $request->validate([
            'id' => 'required|integer',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:6',

        ]);

        $post->update($data);

        return view('/DBHomesAdmin/userDetails');
    }
}
