<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perk extends Model
{
    use HasFactory;
    protected $table = 'perks';
    protected $guarded = []; 

    public function friends() {
        return $this->belongsToMany(Friend::class, 'friend_perks', 'perk_id', relatedPivotKey: 'friend_id');
    }

}
