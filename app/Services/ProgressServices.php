<?php

namespace App\Services;

use App\Models\Blog;
use App\Services\Services as HelpServices;

class ProgressServices extends HelpServices
{
    protected $mainCat = 3;

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
}