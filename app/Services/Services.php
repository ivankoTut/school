<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 17.08.17
 * Time: 21:46
 */

namespace App\Services;

use App\Models\Blog;
use Illuminate\Support\Collection;
use phpDocumentor\Reflection\Types\Integer;

/**
 * Class Services
 * @package App\Services
 */
class Services
{

    private $catId;

    /**
     * @param $id
     * @return $this
     */
    public function initCatId($id)
    {
        $this->catId = $id;
        return $this;
    }
    /**
     * @param $post
     * @return bool
     */
    protected function isPost( $post)
    {
        if(!$post){
            abort(404);
        }

        return true;
    }

    /**
     * @param Collection $posts
     * @return bool
     */
    protected function isPosts( Collection $posts )
    {
        if(!$posts->count()){
            abort(404);
        }

        return true;
    }


    /**
     * @param $id
     * @return Blog
     */
    public function getPost($id)
    {
        $post = Blog::with('files')
            ->where('category_id', $this->catId)
            ->where('id', $id)->first();
        $this->isPost($post);

        return $post;
    }


    /**
     * @param Blog $post
     * @return Blog
     */
    protected function updateView(Blog $post)
    {
        $post->views += 1;
        $post->save();

        return $post;
    }

    /**
     * @param int $count
     * @return mixed
     */
    public function getRandomPost($count = 2)
    {
        return Blog::all()->random($count);
    }
}