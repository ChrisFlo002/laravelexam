<?php

namespace App\Http\Controllers;

use App\Models\Elector;
use App\Models\State;
use App\Models\Party;
use Illuminate\Http\Request;

class ElectorController extends Controller
{
    public function showElectorDetails(int $id){
        $elector = Elector::find($id);
        return view('elector.detelector',['elector'=> $elector]);
    }
    public function showElectorHome(){
        $electors = Elector::all();
        return view('elector.index',['electors'=> $electors]);
    }
    public function showElectorCreate(){
        $states= State::all();
        $parties = Party::all();
        return view('elector.newelector',['states'=>$states,'parties'=>$parties]);
    }
    public function showElectorDelete(){
        return view('elector.deleteelectors');
    }
    public function createelector(Request $request){
        $request->validate([
            'name_elector' => ['required','min:3','max:50'],
            'gender' => 'required',
            'state_id' => 'required|integer',
            'party_id' => 'required|integer',
        ]);
        Elector::create([
            'name_elector'=> $request->name_elector,
            'gender'=> $request->gender,
            'party_id'=> $request->party_id,
            'state_id'=> $request->state_id,
        ]);
        return redirect('/admin/elector')->with('status', 'Elector added');
    }
    public function updateelector(int $id){
        $elector = Elector::findOrfail($id);
        $states= State::all();
        $parties = Party::all();
        return view('elector.edelector',['states'=>$states,'parties'=>$parties,'elector'=>$elector]);
    }
    public function update(Request $req, int $id){
        $req->validate([
            'name_elector' => ['required','min:3','max:50'],
            'gender' => 'required',
            'state_id' => 'required|integer',
            'party_id' => 'required|integer',
        ]);
        Elector::findOrfail($id)->update($req->all());
        return redirect('/admin/elector')->with('status', 'Elector updated');
    }
    public function deleteelector(int $id){
        $elector = Elector::findOrfail($id);
        $elector->delete();
        return redirect('/admin/elector')->with('status', 'Elector deleted');
    }
}
