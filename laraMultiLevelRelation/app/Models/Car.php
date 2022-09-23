<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'model', 'make', 'player'];
    
    public function brands()
    {
    	return $this->belongsTo(Brand::class,'make','id');
    }
    

}
