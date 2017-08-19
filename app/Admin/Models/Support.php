<?php
namespace App\Admin\Models;


use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Section;
use App\Models\Support as Sp;


class Support extends Section implements Initializable
{

    public function initialize()
    {
        $this->title = 'Обратная связь';
        $this->icon = 'fa fa-newspaper-o';
        $this->addToNavigation($priority = 500, function() { return Sp::count(); });
    }
    public function isDeletable(Model $model)
    {
        return true;
    }

    public function isCreatable()
    {
        return false;
    }


    public function onDisplay()
    {
        return AdminDisplay::table()
            ->setColumns(
                AdminColumn::text('id', 'Id'),
                AdminColumn::text('name', 'Название'),
                AdminColumn::text('email', 'Email'),
                AdminColumn::text('subject', 'Тема')
            )->paginate(20);
    }

    public function onEdit($id)
    {
        return AdminForm::panel()->addBody([
            AdminFormElement::text('name', 'Название')->required(),
            AdminFormElement::text('email', 'Файл')->required(),
            AdminFormElement::text('subject', 'Блог')->required(),
            AdminFormElement::text('message', 'Сообщение')->required(),
        ]);

    }

    public function onCreate()
    {
        return $this->onEdit(null);
    }


}