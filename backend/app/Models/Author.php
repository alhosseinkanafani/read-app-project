<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

use App\Models\Book;


class Author extends Model
{
    use Notifiable , HasApiTokens, HasFactory ;

    public $fillable = ['author_name'];
    public $timestamps = false;


    public function books(){
        return $this->hasMany(Book::class,'author_id');
    }


}
