<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('admin.users.create', compact('roles'));
    }

    public function show($id)
    {
        $users = User::find($id);
        return view('admin.users.show', compact('users'));

    }
    public function store(Request $request)
    {
        //dd($request->all());
        $user = User::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'password' => bcrypt($request -> password),
        ]);
        $user->assignRole($request->roles);

        return redirect()->route('users.index')->with('success', 'Data has been added!');
    }

    public function edit(string $id)
    {
        $users = User::find($id);
        $roles = Role::all();
        return view('admin.users.edit', compact('users', 'roles'));

        //dd($dtPegawai);
    }

    public function update(Request $request, string $id)
    {
        $users = User::findOrFail($id);
        $roles = Role::all();
        $users->update([
            'name' => $request->name,
            'role' => $request->role,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        $users->syncRoles($request->roles);

        return redirect()->route('users.index')->with('success', 'Data has been updated!');
    }


    public function destroy(string $id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return redirect()->route('users.index')->with('status', 'Data has been removed!');
    }


}
