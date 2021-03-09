<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

class Post extends Model
{
    use HasFactory;
    use HasTags;

    protected $fillable = [
        'title',
        'content'
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
