<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Perk extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'perks';
    protected $guarded = []; 

    public function friends () {
        return $this -> belongsToMany(Friend::class);
    }
}
