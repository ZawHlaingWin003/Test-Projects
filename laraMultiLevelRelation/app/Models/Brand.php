<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    
    public function players()
    {
    	return $this->hasManyThrough(Player::class,
		    Car::class, 'player', 'id');
    }
}
