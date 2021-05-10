<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // ← the field name inside the array is not mass-assignable
    // protected $guarded = ['id', 'email];
    protected $guarded = [];

    // only the field names inside the array can be mass-assign
    // protected $fillable = ['name','subject','message'];
}
