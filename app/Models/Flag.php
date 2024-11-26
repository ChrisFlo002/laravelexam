<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\State;

class Flag extends Model
{
    protected $fillable= [
        'path',
    ];
    //
    public function state(){
        return $this->belongsTo(State::class);
    }
}
