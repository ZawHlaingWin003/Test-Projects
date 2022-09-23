<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'height', 'income', 'suburb', 'contactDetails'];
    
    public function suburbs()
    {
    	return $this->belongsTo(Suburb::class,'suburb', 'id');
    }
    
    
    public function cars()
    {
    	return $this->hasMany(Car::class, 'player','id');
    }
}
