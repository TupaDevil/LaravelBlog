<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Normis_example extends Model
{
    use HasFactory;
    protected $table = 'normis';
    protected $guarded = []; 

    public function weapons() {
        return $this->belongsToMany(Weapon_example::class, 'normis_weapons', 'normis_id', relatedPivotKey: 'weapon_id' );
    }
}
