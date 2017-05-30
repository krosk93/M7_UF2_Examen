<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $fillable = ['tipus', 'zona', 'adreca', 'numHabitacions', 'preu', 'mida', 'observacions'];
}
