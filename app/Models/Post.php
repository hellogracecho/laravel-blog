<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // * Eager Loading Relationships $with
    protected $with = ['category', 'author'];

    protected $guarded = ['id']; // this column should be protected
    // protected $fillable = ['title', 'slug', 'excerpt', 'body']; // these columns can be mass assigned

    // * Relationship with Category
    public function category()
    {
        // hasOne, hasMany, belongsTo...
        return $this->belongsTo(Category::class);
    }

    public function author() 
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
