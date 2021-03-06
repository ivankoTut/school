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
 * @property string $file
 * @property-read \App\Models\Blog $blog
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\File whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\File withBlog($blogId)
 */
class File extends Model
{

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
