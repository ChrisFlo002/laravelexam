<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Senator;
use App\Models\Governor;
use App\Models\Elector;
use App\Models\Parlementaire;

class Party extends Model
{
    protected $fillable= [
        'name_party'
    ];
    public function senators(){
        return $this->hasMany(Senator::class);
    }
    public function governors(){
        return $this->hasMany(Governor::class);
    }
    public function electors(){
        return $this->hasMany(Elector::class);
    }
    public function parlementaires(){
        return $this->hasMany(Parlementaire::class);
    }
}
