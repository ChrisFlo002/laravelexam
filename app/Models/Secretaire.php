<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Secretaire extends Model
{
    protected $fillable = [
        'name_secretaire',
        'age',
        'poste',
        'state_id'
    ];
    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
