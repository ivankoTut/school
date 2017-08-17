<?php

use SleepingOwl\Admin\Navigation\Page;

return [
    [
        'title' => 'Dashboard',
        'icon'  => 'fa fa-dashboard',
        'url'   => route('admin.dashboard'),
    ],

    [
        'title' => 'Information',
        'icon'  => 'fa fa-exclamation-circle',
        'url'   => route('admin.information'),
    ],

    [
        'title' => 'Обучающимся',
        'icon'  => 'fa fa-exclamation-circle',
        'url'   => '/admin/blogs?show=student',
    ],
    [
        'title' => 'Методическая копилка',
        'icon'  => 'fa fa-exclamation-circle',
        'url'   => '/admin/blogs?show=methodology',
    ],
    [
        'title' => 'Готовимся к ГИА',
        'icon'  => 'fa fa-exclamation-circle',
        'url'   => '/admin/blogs?show=gia',
    ],
    [
        'title' => 'Наши достижения',
        'icon'  => 'fa fa-exclamation-circle',
        'url'   => '/admin/blogs?show=progress',
    ],
    [
        'title' => 'Педагогическая деятельность',
        'icon'  => 'fa fa-exclamation-circle',
        'url'   => '/admin/blogs?show=teacher',
    ],
    [
        'title' => 'Классному руководителю',
        'icon'  => 'fa fa-exclamation-circle',
        'url'   => '/admin/blogs?show=class_teacher',
    ],
    [
        'title' => 'Фото',
        'icon'  => 'fa fa-exclamation-circle',
        'url'   => '/admin/blogs?show=photo',
    ],
    [
        'title' => 'Конкурсы',
        'icon'  => 'fa fa-exclamation-circle',
        'url'   => '/admin/blogs?show=contest',
    ],
    [
        'title' => 'Олимпиады',
        'icon'  => 'fa fa-exclamation-circle',
        'url'   => '/admin/blogs?show=olympics',
    ],

    // Examples
    // [
    //    'title' => 'Content',
    //    'pages' => [
    //
    //        \App\User::class,
    //
    //        // or
    //
    //        (new Page(\App\User::class))
    //            ->setPriority(100)
    //            ->setIcon('fa fa-user')
    //            ->setUrl('users')
    //            ->setAccessLogic(function (Page $page) {
    //                return auth()->user()->isSuperAdmin();
    //            }),
    //
    //        // or
    //
    //        new Page([
    //            'title'    => 'News',
    //            'priority' => 200,
    //            'model'    => \App\News::class
    //        ]),
    //
    //        // or
    //        (new Page(/* ... */))->setPages(function (Page $page) {
    //            $page->addPage([
    //                'title'    => 'Blog',
    //                'priority' => 100,
    //                'model'    => \App\Blog::class
	//		      ));
    //
	//		      $page->addPage(\App\Blog::class);
    //	      }),
    //
    //        // or
    //
    //        [
    //            'title'       => 'News',
    //            'priority'    => 300,
    //            'accessLogic' => function ($page) {
    //                return $page->isActive();
    //		      },
    //            'pages'       => [
    //
    //                // ...
    //
    //            ]
    //        ]
    //    ]
    // ]
];