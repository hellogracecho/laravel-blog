<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestPost extends Model
{
    use HasFactory;
    public $table = 'posts';
    public $fillable = ['name', 'user_id'];
}
