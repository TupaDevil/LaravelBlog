<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FriendSecond extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'friends';
    protected $guarded = []; 

    public function weapon () {
        return $this -> belongsTo(Weapon::class);
    }

    public function sex () {
        return $this -> belongsTo(Sex::class);
    }

    public function perks () {
        return $this -> belongsToMany(Perk::class);
    }
}
