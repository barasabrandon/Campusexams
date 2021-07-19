<?php

namespace App\Models;


use App\Models\User;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Table name
    protected $table = 'posts';
    //Primary Key
    public $primaryKey ='id';
    //Timestamps
    public $timestamps = true;

    //Creating relationship between the user and posts
     public function user() {
         return $this->belongsTo('App\Models\User');
     }
}
