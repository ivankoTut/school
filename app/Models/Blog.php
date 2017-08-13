<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Blog
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property int $category_id
 * @property int $sub_category_id
 * @property int $sub_sub_category_id
 * @property string $icon
 * @property string $text
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog whereSubCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog whereSubSubCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog whereUpdatedAt($value)
 */
class Blog extends Model
{
    //
}
