<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;


class AdminSectionsServiceProvider extends ServiceProvider
{

    /**
     * @var array
     */
    protected $sections = [
        Category::class => \App\Admin\Models\Category::class,
        SubCategory::class => \App\Admin\Models\SubCategory::class,
        SubSubCategory::class => \App\Admin\Models\SubSubCategory::class,
        Blog::class => \App\Admin\Models\Blog::class,
    ];

    /**
     * Register sections.
     *
     * @return void
     */
    public function boot(\SleepingOwl\Admin\Admin $admin)
    {
    	//

        parent::boot($admin);
    }
}
