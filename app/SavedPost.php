<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SavedPost extends Model
{

       // Table Name
       protected $table_name = 'saved_posts';

       // Primary Key
       public $primary_key = 'id';
   
       // Timestamps
       public $timestamps = true;


    public function posts() 
    {
        return $this->hasMany('App\Post');
    }

    public function users() 
    {
        return $this->hasMany('App\User');
    }
}
