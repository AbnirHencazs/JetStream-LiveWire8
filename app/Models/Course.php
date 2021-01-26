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

    public function similar()
    {
        return $this->where('category_id', $this->category_id)->take(2)->get();
        //Busca el id de la categoria respecto al valor que tenga que dependera del curso que se este visualizando
    }
}
