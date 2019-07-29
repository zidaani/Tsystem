<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $primaryKey = 'branch_id';

    protected $fillable = ['branch_name', 'branch_location', 'branch_capital', 'date_established', 'name_of_agent'];
}
