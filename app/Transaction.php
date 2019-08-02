<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
     protected $primaryKey = 'id';

    protected $fillable = ['daily_amount','date','trans_id','confirmed_by_id','updated_by_id'];
}
