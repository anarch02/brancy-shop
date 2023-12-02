<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {

        $query = $request->input('query');

        $results = Product::where('name', 'like', "%$query%")->pluck('code', 'name', 'image');

        $posts = Post::where('title', 'like', '%'.$query.'%')->pluck('slug', 'title', 'thumbnail');

        return response()->json(['products' => $results, 'posts' => $posts]);
        
    }
}
