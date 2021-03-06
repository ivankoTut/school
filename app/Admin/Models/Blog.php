<?php
namespace App\Admin\Models;


use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use AdminSection;
use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Section;
use App\Models\Blog as BG;


class Blog extends Section implements Initializable
{

    static $cat = [
        'student' => 1,
        'methodology' => 2,
        'progress' => 3,
        'gia' => 4,
        'teacher' => 5,
        'class_teacher' => 6,
        'photo' => 7,
        'contest' => 8,
        'olympics' => 9,
    ];

    public function initialize()
    {
        $this->title = 'Blog';
        $this->icon = 'fa fa-newspaper-o';
        $this->addToNavigation($priority = 500, function() { return BG::count(); });
    }
    public function isDeletable(Model $model)
    {
        return true;
    }

    public function isCreatable()
    {
        return true;
    }


    public function onDisplay()
    {
        return AdminDisplay::table()
            ->setApply(function($query) {
                if (request('show')) {
                    $query->where('category_id', self::$cat[request('show')])
                        ->orderBy('created_at', 'desc');
                }
            })
            ->setColumns(
                AdminColumn::text('id', 'Id'),
                AdminColumn::text('name', 'Название'),
                AdminColumn::text('category_id', 'Категория'),
                AdminColumn::text('sub_category_id', 'Под Категория'),
                AdminColumn::text('sub_sub_category_id', 'Под под Категория'),
                AdminColumn::text('icon', 'Иконка поста')
            )->paginate(20);
    }

    public function onEdit($id)
    {
        $form = AdminForm::panel();
        $form->addHeader([
            AdminFormElement::columns()
                ->addColumn([
                    AdminFormElement::text('name', 'Название')->required(),
                    AdminFormElement::select('category_id', 'Категория', \App\Models\Category::class)
                        ->setDisplay('name')->required(),
                ], 2)->addColumn([
                    AdminFormElement::select('sub_category_id', 'Под Категория', \App\Models\SubCategory::class)
                        ->setDisplay('name'),
                    AdminFormElement::select('sub_sub_category_id', 'Под под Категория', \App\Models\SubSubCategory::class)
                        ->setDisplay('name'),
                ], 3)->addColumn([
                    AdminFormElement::image('icon', 'Иконка поста')->required(),
                    AdminFormElement::ckeditor('text', 'Текст')->required(),
                ])
        ]);

        $Files= AdminSection::getModel(\App\Models\File::class)->fireDisplay();
        $Files->getScopes()->push(['withBlog', $id]);
        $Files->setParameter('blog_id', $id);
        $Files->getColumns()->disableControls();

        $Slider = AdminSection::getModel(\App\Models\Slider::class)->fireDisplay();
        $Slider->getScopes()->push(['withBlog', $id]);
        $Slider->setParameter('blog_id', $id);
        $Slider->getColumns()->disableControls();
        $tabs = AdminDisplay::tabbed([
            'Файлы' => new \SleepingOwl\Admin\Form\FormElements([
                $Files
            ]),
            'Слайдер' => new \SleepingOwl\Admin\Form\FormElements([
                $Slider
            ]),
        ]);

        $form->addElement($tabs);

        return $form;

    }

    public function onCreate()
    {
        return $this->onEdit(null);
    }


}