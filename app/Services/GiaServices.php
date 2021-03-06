<?php

namespace App\Services;

use App\Models\Blog;
use App\Services\Services as HelpServices;

class GiaServices extends HelpServices
{
    protected $mainCat = 4;

    private $blog;

    function __construct()
    {
        $this->blog = Blog::with('files')->where('category_id', $this->mainCat);
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