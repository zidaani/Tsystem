<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userdashboard extends Model
{
        protected $primaryKey = 'id';
    
    protected $fillable = ['branch_id','first_name', 'last_name', 'other_name', 'date_of_birth', 'sex', 'education','home_town','residential_address','email','type_id','password'];
}
