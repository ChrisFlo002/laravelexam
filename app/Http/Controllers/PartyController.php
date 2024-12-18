<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Party;

class PartyController extends Controller
{
    public function showPartyCreate(){
        return view('party.newparty');
    }
    public function showPartyDetails($id){
        $party = Party::find($id);
        return view('party.detparty',['party'=> $party]);
    }
    public function showPartyHome(){
        $parties = Party::all();
        return view('party.index',['parties'=> $parties]);
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
        return redirect('/admin/party')->with('status', 'Party added');
    }
    public function updateParty(int $id){
        $party = Party::findOrfail($id);
        return view('party.edparty',['party'=>$party]);
    }
    public function update(Request $req, int $id){
        $req->validate([
            'name_party' => ['required','min:3','max:50'],
        ]);
        Party::findOrfail($id)->update($req->all());
        return redirect('/admin/party')->with('status', 'Party updated');
    }
    public function deleteParty(int $id){
        $party = Party::findOrfail($id);
        $party->delete();
        return redirect('/admin/party')->with('status', 'Party deleted');
    }
}
