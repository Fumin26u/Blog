<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_Tag extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'post_tag';
}
