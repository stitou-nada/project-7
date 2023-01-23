<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class filmAvoir extends Model
{
    use HasFactory;
    protected $table= "film_avoir";
    public $timestamps = false;
    protected $fillable=[
        'id',
        'image',
        'titre',
        'moyenne_vote',
        'date',
        'description',
        'type'

    ];
}
