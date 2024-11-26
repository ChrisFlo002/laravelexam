<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Party;

class PartyController extends Controller
{
    public function showPartyCreate(){
        return view('partyhome');
    }
    public function showPartyHome(){
        $parties = Party::all();
        return view('party.homeparty',['parties'=> $parties]);
    }
    public function showPartyDelete(){
        return view('party.deleteparty');
    }
    public function createParty(Request $request){
        $request->validate([
            'name_party' => ['required','min:3','max:50'],
        ]);
        Party::create([
            'name_party'=> $request->name_party,
        ]);
        return redirect('/party')->with('status', 'Party added');
    }
    public function updateParty(int $id){
        $party = Party::findOrfail($id);
        return view('party.partyedit',['party'=>$party]);
    }
    public function update(Request $req, int $id){
        $req->validate([
            'name_party' => ['required','min:3','max:50'],
        ]);
        Party::findOrfail($id)->update($req->all());
        return redirect('/party')->with('status', 'Party updated');
    }
    public function deleteParty(int $id){
        $party = Party::findOrfail($id);
        $party->delete();
        return redirect('/party')->with('status', 'Party deleted');
    }
}
