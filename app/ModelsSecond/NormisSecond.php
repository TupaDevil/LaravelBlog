<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NormisSecond extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'normis';
    protected $guarded = []; 

    public function weapons () {
        return $this -> belongsToManyMany(Weapon::class);
    }
}
