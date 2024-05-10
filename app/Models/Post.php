<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'categoria',
        'published_at',
        'is_active',
    ];

    //relacion uno a muchos
    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }

    //relacion muchos a muchos
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag', 'post_id', 'tag_id');
    }
}
