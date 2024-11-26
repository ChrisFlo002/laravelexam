<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parlementire;
use App\Models\State;
use App\Models\Party;

class ParlementaireController extends Controller
{
    public function showParlementaireHome(){
        $senators = Senator::all();
        return view('parlementaire.homeSenator',['parlementaires'=>$senators]);
    }
    public function showParlementaireCreate(){
        $states= State::all();
        $parties = Party::all();
        return view('parlementaire.senatorhome',['states'=>$states,'parties'=>$parties]);
    }
    public function showParlementaireDelete(){
        return view('parlementaire.deletesenator');
    }
    public function createParlementaire(Request $request){
        $request->validate([
            'name' => ['required','min:3','max:50'],
            'gender' => 'required',
            'state_id' => 'required|integer',
            'party_id' => 'required|integer',
            'age' => 'required|integer|min:18',
        ]);
        Senator::create([
            'name'=> $request->name,
            'gender'=> $request->gender,
            'age'=> $request->age,
            'party_id'=> $request->party_id,
            'state_id'=> $request->state_id,
        ]);
        return redirect('/senator')->with('status', 'Senator added');
    }
    public function updateParlementaire(int $id){
        $senator = Senator::findOrfail($id);
        $states= State::all();
        $parties = Party::all();
        return view('parlementaire.senatorEdit',['states'=>$states,'parties'=>$parties,'senator'=>$senator]);
    }
    public function update(Request $req, int $id){
        $req->validate([
            'name' => ['required','min:3','max:50'],
            'gender' => 'required',
            'state_id' => 'required|integer',
            'party_id' => 'required|integer',
            'age' => 'required|integer|min:18',
        ]);
        Senator::findOrfail($id)->update($req->all());
        return redirect('/senator')->with('status', 'Senator updated');
    }
    public function deleteParlementaire(int $id){
        $senator = Senator::findOrfail($id);
        $senator->delete();
        return redirect('/senator')->with('status', 'Senator deleted');
    }
}
