<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class friend_example extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'friends';
    protected $guarded = []; 

    public function weapon() {
        return $this->belongsTo(Friend_example::class, 'weapon_id', 'id' );
    }

    public function sex() {
        return $this->belongsTo(Friend_example::class, 'sex_id', 'id');
    }

    public function perks() {
        return $this->belongsToMany(Perk_example::class, 'friend_perks', 'friend_id', relatedPivotKey: 'perk_id' );
    }
}


