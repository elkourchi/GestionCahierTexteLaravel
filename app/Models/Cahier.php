<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cahier extends Model
{
    use HasFactory;
    public $primaryKey = 'classe';
    public $incrementing = false;
    protected $fillable = [ 
        'classe', 'date', 'cours', 'details', 'description' 
    ];
}
