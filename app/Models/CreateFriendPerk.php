<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreateFriendPerk extends Model
{
    use HasFactory;
    protected $table = 'friend_perk';
    protected $guarded = []; 
}
