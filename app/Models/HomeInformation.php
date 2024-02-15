<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeInformation extends Model
{
    use HasFactory;
    //get as array
    protected $guarded = [];    //jab fill kng table
    //here is one by one
    // protected $fillable = [
    //     'short_title',
    //     'long_title',

    // ];
}
