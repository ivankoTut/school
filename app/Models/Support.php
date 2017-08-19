<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Support
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $message
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Support extends Model
{
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];
}
