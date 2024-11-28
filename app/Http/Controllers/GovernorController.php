<?php

namespace App\Http\Controllers;

use App\Models\Elector;
use App\Models\Senator;
use App\Models\Governor;
use Illuminate\Http\Request;
use App\Models\Parlementaire;
use Illuminate\Support\Facades\Auth;

class GovernorController extends Controller
{
    public function showdash()
    {
        return view('governor.dashboard');
    }
    public function showGovernorDetails()
    {
        $user = Auth::user();
        $governor = Governor::where('user_id', $user->id)->first();
        return view('governor.detgovernor', ['governor' => $governor,'user'=>$user]);
    }

    public function showGovernorElectors()
    {
        $governor = Governor::where('user_id', Auth::user()->id)->first();
        $infos = Elector::where('state_id', $governor->state_id)->get();
        return view('governor.index', compact('infos'));
    }

    public function showGovernorSenators()
    {
        $governor = Governor::where('user_id', Auth::user()->id)->first();
        $infos = Senator::where('state_id', '=', $governor->state_id)->get();
        return view('governor.index', compact('infos'));
    }
    public function showGovernorParlementaire()
    {
        $governor = Governor::where('user_id', Auth::user()->id)->first();
        $infos = Parlementaire::where('state_id', $governor->state_id)->get();
        return view('governor.index', compact('infos'));
    }

    public function update(Request $req, int $id)
    {
        $req->validate([
            'name_governor' => ['required', 'min:3', 'max:50'],
            'gender' => 'required',
            'state_id' => 'required|integer',
            'party_id' => 'required|integer',
        ]);
        Governor::findOrfail($id)->update($req->all());
        return redirect('/governor')->with('status', 'governor updated');
    }
    public function deleteGovernor(int $id)
    {
        $governor = Governor::findOrfail($id);
        $governor->delete();
        return redirect('/governor')->with('status', 'Governor deleted');
    }
}
