<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suburb extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'club'];
    
    
    public function players()
    {
    	return $this->hasMany(Player::class,'suburb','id');
    }
    
    
    public function clubs()
    {
    	return $this->belongsTo(Club::class, 'club', 'id');
    }
}
