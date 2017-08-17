<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 17.08.17
 * Time: 23:02
 */

namespace App\Services;

use App\Models\Blog;
use App\Services\Services as HelpServices;

class BlogServices extends HelpServices
{
    protected $mainCat;

    private $blog;

    /**
     * @param $id
     * @return $this
     */
    public function setMainCat($id){
        $this->mainCat = $id;

        return $this;
    }


    /**
     * @return $this
     */
    function init()
    {
        $this->blog = Blog::where('category_id', $this->mainCat);

        return $this;
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