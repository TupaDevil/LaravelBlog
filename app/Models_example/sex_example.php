<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class sex_example extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'sexes';
    protected $guarded = []; 

    public function friends() {
        return $this->hasMany(Friend_example::class, 'sex_id', 'id');
    }
}
