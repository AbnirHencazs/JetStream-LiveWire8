<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class); //Establecemos relación entre cursos y usuarios
    }

    public function GetExcerptAttribute()
    {
        return substr($this->description, 0, 80) . "...";
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
