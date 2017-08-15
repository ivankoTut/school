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
use App\Models\File as Fi;


class File extends Section implements Initializable
{

    public function initialize()
    {
        $this->title = 'Файлы';
        $this->icon = 'fa fa-newspaper-o';
        $this->addToNavigation($priority = 500, function() { return Fi::count(); });
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
            ->setColumns(
                AdminColumn::text('id', 'Id'),
                AdminColumn::text('name', 'Название'),
                AdminColumn::text('file', 'Файл'),
                AdminColumn::text('blog_id', 'Блог')
            )->paginate(20);
    }

    public function onEdit($id)
    {
        return AdminForm::panel()->addBody([
            AdminFormElement::text('name', 'Название')->required(),
            AdminFormElement::file('file', 'Файл')->required(),
            AdminFormElement::select('blog_id', 'Блог', \App\Models\Blog::class)
                ->setDisplay('name')->required(),
        ]);

    }

    public function onCreate()
    {
        return $this->onEdit(null);
    }


}