<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = 'history';

    protected $fillable = ['student_ID', 'order_id', 'date', 'deposit'];
}
