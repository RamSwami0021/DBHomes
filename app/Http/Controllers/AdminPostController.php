<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Post;

class AdminPostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('/DBHomesAdmin/post', compact('posts'));
    }

    public function adminPostEdit($id)
    {
        $Post = post::findOrFail($id);
        return view('/DBHomesAdmin/postDetails', compact('Post'));
    }

    public function adminPostUpdate(Request $request, $post)
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

        $post->update($data);

        return redirect()->route('adminPostEdit');
    }

    public function adminPostDelete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
    
        return redirect()->route('admin.post');
    } 
    public function ProjectSale()
    {
        $posts = Post::all();
        return view('/ProjectSale', compact('posts'));
    }   
    public function ProjectSaleDetails($id)
    {
        $post = post::findOrFail($id);
        return view('/ProSaledetail', compact('post'));
    }   

    // /project-sale-filter?id=123&filter_type=some_type&location=some_location&property_type=some_property&budget=500000

    public function ProjectSaleFilter(Request $request)
{
    $query = Post::query();

    if ($request->has('filter_type')) {
        $query->where('filter_type', $request->input('filter_type'));
    }

    if ($request->has('location')) {
        $query->where('location', $request->input('location'));
    }

    if ($request->has('property_type')) {
        $query->where('property_type', $request->input('property_type'));
    }

    if ($request->has('budget')) {
        $budget = $request->input('budget');
        $query->where(function ($q) use ($budget) {
            $q->where('min_budget', '<=', $budget)
              ->orWhere('max_budget', '>=', $budget);
        });
    }

    $post = $query->findOrFail($request->input('id'));

    return view('/ProSaledetail', compact('post'));
}
  
}
