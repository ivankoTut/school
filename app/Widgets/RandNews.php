<?php

namespace App\Widgets;

use App\Services\BlogServices;
use Arrilot\Widgets\AbstractWidget;

class RandNews extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [
        'count' => 5,
    ];

    /**
     * @param BlogServices $services
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function run( BlogServices $services )
    {
        $services->setMainCat(5)->init();
        $posts = $services->getRandomPost(2);

        return view('widgets.rand_news', compact('posts'));
    }
}
