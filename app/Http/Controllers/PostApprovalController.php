<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\PostApproval;
use App\Models\Post;

class PostApprovalController extends Controller
{
    public function post()
    {
        return view('/DBHomesUsers/post');
    }
    public function postcreate(Request $request)
{
    $postApproval = new PostApproval([
        'user_id' => $request->input('user_id'),
        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'selling_price' => $request->input('selling_price'),
        'location' => $request->input('location'),
        'sale_status' => $request->input('sale_status'),
        'plot_area' => $request->input('plot_area'),
        'boundary_wall' => $request->input('boundary_wall'),
        'main_entrance_facing' => $request->input('main_entrance_facing'),
        'no_of_open_sides' => $request->input('no_of_open_sides'),
        'ownership_type' => $request->input('ownership_type'),
        'water_supply' => $request->input('water_supply'),
        'width_of_road_facing_property' => $request->input('width_of_road_facing_property'),
        'avg_psf' => $request->input('avg_psf'),
        // 'approved' => $request->input('approved'),
    ]);

    if ($request->hasFile('img')) {
        $imagePath = $request->file('img')->store('images', 'public'); // Store the image in the "public/images" directory
        $postApproval->img_location = $imagePath;
    }

    $postApproval->save(); // Save the new record to the database

    return view('/DBHomesUsers/post');
}

    public function postlist()
    {

        $user_id = Auth::user()->id;
        $posts = PostApproval::where('user_id', $user_id)->get();
        return view('/DBHomesUsers/postlist', compact('posts'));
    }
    public function destroy($id)
    {
        $posts = PostApproval::findOrFail($id);
        $posts->delete();
    
        return view('/DBHomesUsers/postlist');
    } 
    public function approved()
    {
        $user_id = Auth::user()->id;
        $posts = Post::where('user_id', $user_id)->get();
        return view('/DBHomesUsers/approvePostList', compact('posts'));
    }
    public function destroyApproved($id)
    {
        $posts = Post::findOrFail($id);
        $posts->delete();
    
        return view('/DBHomesUsers/approvePostList');
    } 
    public function approvedPost($approvalId)
    {
        // Retrieve the approval record
        $approval = PostApproval::find($approvalId);
    
        if ($approval) {
            // Create a new post using the approval data
            $post = new Post([
                'user_id' => $approval->user_id,
                'title' => $approval->title,
                'description' => $approval->description,
                'selling_price' => $approval->selling_price,
                'location' => $approval->location,
                'sale_status' => $approval->sale_status,
                'plot_area' => $approval->plot_area,
                'boundary_wall' => $approval->boundary_wall,
                'main_entrance_facing' => $approval->main_entrance_facing,
                'no_of_open_sides' => $approval->no_of_open_sides,
                'ownership_type' => $approval->ownership_type,
                'water_supply' => $approval->water_supply,
                'width_of_road_facing_property' => $approval->width_of_road_facing_property,
                'avg_psf' => $approval->avg_psf,
            ]);
    
            // Save the post
            $post->save();
    
            // Move the image from approval to post
            if ($approval->img_location) {
                $imagePath = str_replace('images', 'images/posts', $approval->img_location);
                Storage::move('public/' . $approval->img_location, 'public/' . $imagePath);
                $post->img_location = $imagePath;
            }
    
            // Delete the approval record
            $approval->delete();
    
            return redirect()->back()->with('success', 'Post approved and moved to posts table.');
        }
    
        return redirect()->back()->with('error', 'Approval record not found.');
    }
    public function postedit($id)
{
    $Post = PostApproval::find($id);
    return view('/DBHomesUsers/postDetails', compact('Post'));
}
public function postUpdate(Request $request, $id)
{

    // Find the record by ID
    $Post = PostApproval::find($id);


    // Update the record with new data
    $Post->update([
        'user_id' => $request->input('user_id'),
        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'selling_price' => $request->input('selling_price'),
        'location' => $request->input('location'),
        'sale_status' => $request->input('sale_status'),
        'plot_area' => $request->input('plot_area'),
        'boundary_wall' => $request->input('boundary_wall'),
        'main_entrance_facing' => $request->input('main_entrance_facing'),
        'no_of_open_sides' => $request->input('no_of_open_sides'),
        'ownership_type' => $request->input('ownership_type'),
        'water_supply' => $request->input('water_supply'),
        'width_of_road_facing_property' => $request->input('width_of_road_facing_property'),
        'avg_psf' => $request->input('avg_psf')
    ]);


    // Redirect back to the details page with a success message
    return view('/DBHomesUsers/postDetails', compact('Post'));
}

public function approvededit($id)
{
    $Post = Post::findOrFail($id);
    return view('/DBHomesUsers/approvePostDetails', compact('Post'));
}
public function approvedUpdate(Request $request, $id)
{

    // Find the record by ID
    $Post = Post::find($id);


    // Update the record with new data
    $Post->update([
        'user_id' => $request->input('user_id'),
        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'selling_price' => $request->input('selling_price'),
        'location' => $request->input('location'),
        'sale_status' => $request->input('sale_status'),
        'plot_area' => $request->input('plot_area'),
        'boundary_wall' => $request->input('boundary_wall'),
        'main_entrance_facing' => $request->input('main_entrance_facing'),
        'no_of_open_sides' => $request->input('no_of_open_sides'),
        'ownership_type' => $request->input('ownership_type'),
        'water_supply' => $request->input('water_supply'),
        'width_of_road_facing_property' => $request->input('width_of_road_facing_property'),
        'avg_psf' => $request->input('avg_psf')
    ]);

    return view('/DBHomesUsers/approvePostDetails', compact('Post'));
}

// admin
public function postPending()
    {
        $posts = PostApproval::all();
        return view('/DBHomesAdmin/postPending', compact('posts'));
    } 
    public function postPendingDelete($id)
    {
        $posts = PostApproval::findOrFail($id);
        $posts->delete();
    
        return view('/admin/postPending');
    } 
    public function postPendingEdit($id)
    {
        $Post = PostApproval::findOrFail($id);
        return view('/DBHomesAdmin/postDetails', compact('Post'));
    }
    public function postPendingUpdate(Request $request, $post)
    {
        $data = $request->validate([
            'user_id' => $request->input('user_id'),
        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'selling_price' => $request->input('selling_price'),
        'location' => $request->input('location'),
        'sale_status' => $request->input('sale_status'),
        'plot_area' => $request->input('plot_area'),
        'boundary_wall' => $request->input('boundary_wall'),
        'main_entrance_facing' => $request->input('main_entrance_facing'),
        'no_of_open_sides' => $request->input('no_of_open_sides'),
        'ownership_type' => $request->input('ownership_type'),
        'water_supply' => $request->input('water_supply'),
        'width_of_road_facing_property' => $request->input('width_of_road_facing_property'),
        'avg_psf' => $request->input('avg_psf')
        ]);

        $PostApproval->update($data);

        return redirect()->route('postPending');
    }
}