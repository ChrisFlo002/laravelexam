<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Governor;
use App\Models\State;
use App\Models\Party;
class GovernorController extends Controller
{
    public function showdash(){
        return view('governor.dashboard');
    }
    public function showGovernorHome(){
        $governors= Governor::all();
        return view('governor.index',['governors'=>$governors]);
    }

    public function showGovernorCreate(){
        $states= State::all();
        $parties = Party::all();
        return view('governor.newgovernor',['states'=>$states,'parties'=>$parties]);
    }

    public function showGovernorDelete(){
        return view('governor.deletegovernors');
    }
    public function createGovernor(Request $request){
        $request->validate([
            'name_governor' => ['required','min:3','max:50'],
            'gender' => 'required',
            'state_id' => 'required|integer',
            'party_id' => 'required|integer',
        ]);
        Governor::create([
            'name_governor'=> $request->name_governor,
            'gender'=> $request->gender,
            'age'=> $request->age,
            'party_id'=> $request->party_id,
            'state_id'=> $request->state_id,
        ]);
        return redirect('/governor')->with('status', 'Governor added');
    }
    public function updateGovernor(int $id){
        $governor = Governor::findOrfail($id);
        $states= State::all();
        $parties = Party::all();
        return view('governor.edgovernor',['states'=>$states,'parties'=>$parties,'governor'=>$governor]);
    }
    public function update(Request $req, int $id){
        $req->validate([
                'name_governor' => ['required','min:3','max:50'],
                'gender' => 'required',
                'state_id' => 'required|integer',
                'party_id' => 'required|integer',
        ]);
        Governor::findOrfail($id)->update($req->all());
        return redirect('/governor')->with('status', 'governor updated');
    }
    public function deleteGovernor(int $id){
        $governor = Governor::findOrfail($id);
        $governor->delete();
        return redirect('/governor')->with('status', 'Governor deleted');
    }
}
