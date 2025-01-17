<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WeaponSecond extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'weapons';
    protected $guarded = []; 

    public function friends () {
        return $this -> hasMany(Friend::class);
    }

    public function normis () {
        return $this -> belongsToManyMany(Normis::class);
    }
}
