<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Senator;
use App\Models\Parlementaire;
use App\Models\Elector;
use App\Models\Flag;

class State extends Model
{
    protected $fillable= [
        'code',
        'name',
        'pib',
        'population',
        'area',
    ];
    public function senators(){
        return $this->hasMany(Senator::class);
    }
    public function parlementaires(){
        return $this->hasMany(Parlementaire::class);
    }
    public function electors(){
        return $this->hasMany(Elector::class);
    }
    public function flag(){
        return $this->hasOne(Flag::class);
    }
}
