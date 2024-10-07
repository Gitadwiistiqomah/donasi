<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;


    protected $fillable = [
    'name', 
    'email',
    'phone',
    'about',
    'address',
    'postal_code',
    'city',
    'province',
    'path_image',
    'path_image_header',
    'path_image_footer',
    ];
}
