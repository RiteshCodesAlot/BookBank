<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
            //Defining a relation book which we are creating will belong to a specific center() & Category so we will use 'belongsTo' relation   
    

            public function center() {
                return $this->belongsTo(Center::class);
            } 
        
            public function category() {
                return $this->belongsTo(Category::class);
            }
}
