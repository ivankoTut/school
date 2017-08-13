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
use App\Models\SubCategory as Cat;


class SubCategory extends Section implements Initializable
{

    public function initialize()
    {
        $this->title = 'Под категории';
        $this->icon = 'fa fa-newspaper-o';
        $this->addToNavigation($priority = 500, function() { return Cat::count(); });
    }
    public function isDeletable(Model $model)
    {
        return false;
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
                AdminColumn::text('name', 'Название')
            )->paginate(20);
    }

    public function onEdit($id)
    {
        return AdminForm::panel()->addBody([
            AdminFormElement::text('name', 'Название')->required(),
        ]);

    }

    public function onCreate()
    {
        return $this->onEdit(null);
    }


}