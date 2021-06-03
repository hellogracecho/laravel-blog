<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id']; // this column should be protected
    // protected $fillable = ['title', 'slug', 'excerpt', 'body']; // these columns can be mass assigned

    // * Relationship with Category
    public function category()
    {
        // hasOne, hasMany, belongsTo...
        return $this->belongsTo(Category::class);
    }
}
