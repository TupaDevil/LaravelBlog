<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NormisWeapon extends Model
{
    use HasFactory;
    protected $table = 'normis_weapons';
    protected $guarded = []; 
}
