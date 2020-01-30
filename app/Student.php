<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';


    // Method to set the relationship between Students and Orders
    // (one to many) One Student can have multiple orders
    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    
   
}
