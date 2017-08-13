<?php
namespace App\Admin\Models;


use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use Auth;
use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Section;
use App\Models\Blog as BG;


class Blog extends Section implements Initializable
{

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
            ->setApply(function($query) { $query->where('category_id', 1)->orderBy('created_at', 'desc'); })
            ->setColumns(
                AdminColumn::text('id', 'Id'),
                AdminColumn::text('name', 'Название'),
                AdminColumn::text('category_id', 'Категория'),
                AdminColumn::text('sub_category_id', 'Под Категория'),
                AdminColumn::text('sub_sub_category_id', 'Под под Категория'),
                AdminColumn::text('icon', 'Иконка поста'),
                AdminColumn::text('text', 'Текст')
            )->paginate(20);
    }

    public function onEdit($id)
    {
        return AdminForm::panel()->addBody([
            AdminFormElement::text('name', 'Название')->required(),
            AdminFormElement::select('category_id', 'Категория', \App\Models\Category::class)
                ->setDisplay('name')->required(),
            AdminFormElement::select('sub_category_id', 'Под Категория', \App\Models\SubCategory::class)
                ->setDisplay('name'),
            AdminFormElement::select('sub_sub_category_id', 'Под под Категория', \App\Models\SubSubCategory::class)
                ->setDisplay('name'),
            AdminFormElement::text('icon', 'Иконка поста')->required(),
            AdminFormElement::text('text', 'Текст')->required(),
        ]);

    }

    public function onCreate()
    {
        return $this->onEdit(null);
    }


}