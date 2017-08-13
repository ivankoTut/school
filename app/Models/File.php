<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\File
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property int $blog_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\File whereBlogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\File whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\File whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\File whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\File whereUpdatedAt($value)
 */
class File extends Model
{
    //
}
