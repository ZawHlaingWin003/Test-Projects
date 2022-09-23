<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'countryId'];
    
    public function countries()
    {
    	return $this->belongsTo(Country::class, 'country', 'id');
    }
    
    public function suburbs()
    {
    	return $this->hasMany(Suburb::class, 'club','id');
    }
    
}
