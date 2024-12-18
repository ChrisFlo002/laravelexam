<?php

namespace App\Http\Controllers;

use App\Models\Party;
use App\Models\State;
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
        $governor = Governor::findOrFail(Auth::user()->id);
        return view('governor.detgovernor', ['governor' => $governor]);
    }

    public function showGovernorElectors(int $id)
    {
        $electors = Elector::where('state_id', $id)->get();
        return view('governor.index', ['infos' => $electors  ?? collect()]);
    }

    public function showGovernorSenators(int $id)
    {
        $senators = Senator::where('state_id', $id)->get();
        return view('governor.index', ['infos' => $senators  ?? collect()]);
    }
    public function showGovernorParlementaire(int $id)
    {
        $parles = Parlementaire::where('state_id', $id)->get();
        return view('governor.index', ['infos' => $parles  ?? collect()]);
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
