<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userdashboard extends Model
{
    protected $primaryKey='id';
    protected $fillable=['daily_amount','date'];
}
