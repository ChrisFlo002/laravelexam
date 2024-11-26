<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Party;
use App\Models\State;
use App\Models\User;

class Governor extends Model
{

    protected $fillable= [
        'user_id',
        'party_id',
        'state_id'
    ];
    public function party()
    {
     return $this->belongsTo(Party::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function state()
    {
     return $this->belongsTo(State::class);
    }
}
