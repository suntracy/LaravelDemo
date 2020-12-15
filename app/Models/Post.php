<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model

{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    use SoftDeletes; 

    protected $fillable = [
        'content'
    ];

    public function subject()
    {
        return $this -> belingsTo(Subject::class);
    }
} 