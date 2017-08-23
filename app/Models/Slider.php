<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Slider
 *
 * @property int $id
 * @property string $name
 * @property array $images
 * @property int $blog_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Models\Blog $blog
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Slider whereBlogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Slider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Slider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Slider whereImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Slider whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Slider whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Slider withBlog($blogId)
 * @mixin \Eloquent
 */
class Slider extends Model
{
    protected $casts = [
        'images' => 'array',
    ];


    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

    public function scopeWithBlog($query, $blogId)
    {
        $query->whereHas('blog', function ($q) use ($blogId) {
            $q->where('blog_id', $blogId);
        });
    }
}
