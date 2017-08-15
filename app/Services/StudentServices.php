<?php

namespace App\Services;

use App\Models\Blog;

class StudentServices
{
    protected $mainCat = 1;

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getAllBlog()
    {
        $posts = Blog::where('category_id', $this->mainCat)->get();
        if(!$posts->count()){
            abort(404);
        }
        return $posts;
    }

    /**
     * @param $cat
     * @return \Illuminate\Support\Collection
     */
    public function getCatPosts($cat)
    {
        $posts = Blog::where('category_id', $this->mainCat)->where('sub_category_id', $cat)->get();

        if(!$posts->count()){
            abort(404);
        }
        return $posts;
    }
}