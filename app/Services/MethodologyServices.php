<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 17.08.17
 * Time: 21:41
 */

namespace App\Services;


use App\Models\Blog;
use App\Services\Services as HelpServices;


class MethodologyServices extends HelpServices
{
    protected $mainCat = 2;

    private $blog;

    /**
     * MethodologyServices constructor
     */
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


    /**
     * @param $cat
     * @param $sub
     * @return \Illuminate\Support\Collection
     */
    public function getSubCatPosts($cat, $sub)
    {
        $posts = $this->blog->where('sub_category_id', $cat)
            ->where('sub_sub_category_id', $sub)->get();
        $this->isPosts($posts);

        return $posts;
    }
}