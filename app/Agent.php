<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = ['branch','first_name', 'last_name', 'other_name', 'date_of_birth', 'sex', 'education','home_town','residential_address'];
}

