<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FriendPerk extends Model
{
    use HasFactory;
    protected $table = 'friend_perks';
    protected $guarded = []; 
}

