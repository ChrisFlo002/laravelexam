<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illumunate\support\Facades\Auth;
use App\Models\Elector;
use App\Models\Senator;
use App\Models\Parlementaire;
use App\Models\Governor;
use App\Models\State;
use App\Models\Party;
class GovernorController extends Controller
{
    public function showdash(){
        return view('governor.dashboard');
    }
    public function showGovernorDetails(){
        $governor = Governor::findOrFail(Auth::user()->id);
        return view('governor.detgovernor',['governor'=>$governor]);
    }

    public function showGovernorElectors(int $id){
       $electors = Elector::where('state_id',$id);
        return view('governor.index',['infos'=>$electors]);
    }

    public function showGovernorSenators(int $id){
        $senators = Senator::where('state_id',$id);
        return view('governor.index',['infos'=>$senators]);
    }
    public function showGovernorParlementaire(int $id){
        $parles = Parlementaire::where('state_id',$id);
        return view('governor.index',['infos'=>$parles]);
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
