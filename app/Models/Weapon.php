<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Weapon extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'weapons';
    protected $guarded = []; 

    public function friends() {
        return $this->hasMany(Friend::class, 'weapon_id', 'id' );
    }

    public function normis() {
        return $this->belongsToMany(Normis::class, 'normis_weapons', 'weapon_id', relatedPivotKey: 'normis_id' );
    }

}
