<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Secretaire extends Model
{
    protected $fillable = [
        'name_secretaire',
        'age',
        'post',
        'party_id',
        'state_id'
    ];
    public function party()
    {
        return $this->belongsTo(Party::class);
    }
    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
