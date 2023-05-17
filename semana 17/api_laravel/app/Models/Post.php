<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //extracto de tecto content
    public function getExcerptAttribute(){
        return substr($this->content, o, 150);
    }
    //mostrar fecha de publicacion
    public function getPublishedAttribute(){
        return $this->created_at->format('d/m/Y');
    }
    //el usuario del post
    public function user(){
        return $this->belongsTo(User::class);
    }
}
