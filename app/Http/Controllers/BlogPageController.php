<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogPageController extends Controller
{
    //


    /**
     * Blog Page Show
     */
    public function showBlogPage(){
        $all_posts = Post::where('status', true) -> where('trash', false)  -> latest() -> paginate(10);
        return view('frontend.blog', [
            'all_posts'     => $all_posts
        ]);
    }


}
