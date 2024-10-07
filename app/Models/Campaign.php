<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'short_description',
        'body',
        'view_count',
        'status',
        'nominal',
        'goal',
        'end_date',
        'note',
        'receiver',
    ];



    public function campaign()
    {
        $this->belongsTo(Campaign::class);
    }
}
