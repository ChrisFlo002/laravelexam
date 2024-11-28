<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parlementaire;
use App\Models\State;
use App\Models\Party;

class ParlementaireController extends Controller
{
    public function showParlementaireHome(){
        $parlementaires = Parlementaire::all();
        return view('parlementaire.index',['parlementaires'=>$parlementaires]);
    }
    public function showParleDetails(int $id){
        $parle = Parlemntaire::findOrFail($id);
        return view('parlementaire.detparlementaire',['parlementaire'=>$parle]);
    }
    public function showParlementaireCreate(){
        $states= State::all();
        $parties = Party::all();
        return view('parlementaire.newparlementaire',['states'=>$states,'parties'=>$parties]);
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
        Parlementaire::create([
            'name'=> $request->name,
            'gender'=> $request->gender,
            'age'=> $request->age,
            'party_id'=> $request->party_id,
            'state_id'=> $request->state_id,
        ]);
        return redirect('/parle')->with('status', 'Parlementaire added');
    }
    public function updateParlementaire(int $id){
        $parle = Parlementaire::findOrfail($id);
        $states= State::all();
        $parties = Party::all();
        return view('parlementaire.edparlementaire',['states'=>$states,'parties'=>$parties,'parle'=>$parle]);
    }
    public function update(Request $req, int $id){
        $req->validate([
            'name' => ['required','min:3','max:50'],
            'gender' => 'required',
            'state_id' => 'required|integer',
            'party_id' => 'required|integer',
            'age' => 'required|integer|min:18',
        ]);
        Parlementaire::findOrfail($id)->update($req->all());
        return redirect('/parle')->with('status', 'Parlementaire updated');
    }
    public function deleteParlementaire(int $id){
        $parle = Parlemntaire::findOrFail($id);
        $parle->delete();
        return redirect('/parle')->with('status', 'Parlementaire deleted');
    }
}
