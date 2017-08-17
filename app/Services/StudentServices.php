<?php

namespace App\Services;

use App\Models\Blog;
use App\Services\Services as HelpServices;

class StudentServices extends HelpServices
{
    protected $mainCat = 1;

    private $blog;

    function __construct()
    {
        $this->blog = Blog::where('category_id', $this->mainCat);
    }


    /**
     * @return int
     */
    public function getCatId()
    {
        return $this->mainCat;
    }


    /**
     * @return \Illuminate\Support\Collection
     */
    public function getAllBlog()
    {
        $posts = $this->blog->get();
        $this->isPosts($posts);

        return $posts;
    }

    /**
     * @param $cat
     * @return \Illuminate\Support\Collection
     */
    public function getCatPosts($cat)
    {
        $posts = $this->blog->where('sub_category_id', $cat)->get();
        $this->isPosts($posts);

        return $posts;
    }
}