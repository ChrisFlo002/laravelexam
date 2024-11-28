<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Party;
use App\Models\State;
use App\Models\Governor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Party;

class UserController extends Controller
{
    public function showdash(Request $request)
    {
        return view('admin.dashboard');
    }
    public function showAdminHome()
    {
        //showing his details in admin home
        $users = User::all();

        return view('admin.index', ['users' => $users]);
    }
    public function showuserCreate()
    {
        $states = State::all();
        $parties = Party::all();
        return view('admin.newadmin', ['states' => $states, 'parties' => $parties]);
    }
    public function createUser(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3', 'max:50'],
            'role' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed'],
            'age' => 'required|integer|min:18',
        ]);
        //if the new user is a governor validate the state_id and party_id
        if ($request->role == 'governor') {
            $request->validate([
                'state_id' => 'required|integer',
                'party_id' => 'required|integer',
            ]);
        }
        //creation of new user
        $user = User::create([
            'name' => $request->name,
            'role' => $request->role,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'age' => $request->age,
        ]);
        //again if the role is governor create a new governor with the newly user_id
        if ($request->role == 'governor') {
            Governor::create([
                'state_id' => $request->state_id,
                'party_id' => $request->party_id,
                'user_id' => $user->id,
            ]);
        }
        //redirect to the admin dashboard
        return redirect('/admin/dashboard')->with('status', 'User added');
    }
    public function showAdminDetails(int $id)
    {
        $user = User::findOrFail($id);
        return view('admin.detadmin', ['user' => $user]);
    }
    public function showUpdateUser(int $id)
    {
        $user = User::findOrFail($id);
        $states = State::all();
        $parties = Party::all();
        $governor = Governor::where('user_id', '=', $id)->get();

        return view('admin.edadmin', ['user' => $user, 'states' => $states, 'parties' => $parties,'governor'=>$governor]);
    }
    public function update(Request $request, int $id)
    { 
        $request->validate([
            'name' => ['required', 'min:3', 'max:50'],
            'role' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed'],
            'age' => 'required|integer|min:18',
        ]);
        //if the user is a governor validate the state_id and party_id
        if ($request->role == 'governor') {
            $request->validate([
                'state_id' => 'required|integer',
                'party_id' => 'required|integer',
            ]);
        }
        $user = User::findOrFail($id);
        //if the user is an admin just update user's details else update also in governor
        if ($user->role == 'admin') {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'age' => $request->age
            ]);
        } else {
            // Use first() instead of get() to get a single model instance
            $governor = Governor::where('user_id', $user->id)->first();
            
            if ($governor) {
                $governor->update([
                    'state_id' => $request->state_id,
                    'party_id' => $request->party_id
                ]);
            }

            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'age' => $request->age
            ]);
        }
        return redirect('/admin/dashboard')->with('status', 'User updated');
    }
    public function delete(int $id)
    {
        $user = User::findOrFail($id);
        if ($user->role = 'governor') {
            $governor = Governor::where('user_id', $user->id);
            $governor->delete();
        }
        $user->delete();
        return redirect('/admin/dashboard')->with('status', 'User deleted');
    }
    public function showInfoParti(int $id)
    {
        $party = Party::with(['electors', 'senators', 'governors', 'parlementaires'])
            ->find($id);

        // Access the relationships
        $electors = $party->electors;
        $senators = $party->senators;
        $governors = $party->governors;
        $parlementaires = $party->parlementaires;
        return view('admin.electorForm', ['electors' => $electors, 'senators' => $senators, 'governors' => $governors, 'parlementaires' => $parlementaires]);
    }
}
