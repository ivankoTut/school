<?php

use SleepingOwl\Admin\Navigation\Page;

return [
    [
        'title' => 'Панель',
        'icon'  => 'fa fa-dashboard',
        'url'   => route('admin.dashboard'),
        'priority' => 0,
    ],

    [
        'title' => 'Information',
        'icon'  => 'fa fa-exclamation-circle',
        'url'   => route('admin.information'),
        'priority' => 1,
    ],
    [
        'title' => 'Наши достижения',
        'icon'  => 'fa fa-pie-chart',
        'url'   => '/admin/blogs?show=progress',
        'priority' => 6,
    ],
    [
        'title' => 'Обучающимся',
        'icon'  => 'fa fa-stumbleupon',
        'url'   => '/admin/blogs?show=student',
        'priority' => 7,
    ],
    [
        'title' => 'Методическая копилка',
        'icon'  => 'fa fa-linode',
        'url'   => '/admin/blogs?show=methodology',
        'priority' => 8
    ],
    [
        'title' => 'Готовимся к ГИА',
        'icon'  => 'fa fa-american-sign-language-interpreting',
        'url'   => '/admin/blogs?show=gia',
        'priority' => 9
    ],
    [
        'title' => 'Педагогическая деятельность',
        'icon'  => 'fa fa-qq',
        'url'   => '/admin/blogs?show=teacher',
        'priority' => 10
    ],
    [
        'title' => 'Классному руководителю',
        'icon'  => 'fa fa-yoast',
        'url'   => '/admin/blogs?show=class_teacher',
        'priority' => 11
    ],
    [
        'title' => 'Фото',
        'icon'  => 'fa fa-file-photo-o ',
        'url'   => '/admin/blogs?show=photo',
        'priority' => 12
    ],
    [
        'title' => 'Конкурсы',
        'icon'  => 'fa fa-exclamation-triangle',
        'url'   => '/admin/blogs?show=contest',
        'priority' => 13
    ],
    [
        'title' => 'Олимпиады',
        'icon'  => 'fa fa-crop',
        'url'   => '/admin/blogs?show=olympics',
        'priority' => 14
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