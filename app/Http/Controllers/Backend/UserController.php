<?php

namespace App\Http\Controllers\Backend;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        $roles = Role::get();
        return view('backend.user.index', compact('users', 'roles'));

        // $roles = Role::get();
        // $assignedRoles = $users->roles()->pluck('name')->toArray();

        // var_dump($assignedRoles);
        // return view('backend.role.index', compact('users', 'roles', 'assignedRoles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $roles = Role::get();
        $user = User::whereId($id)->firstOrFail();
        $selectedRoles = $user->roles()->pluck('name')->toArray();

        return view('backend.user.create', compact('roles', 'user', 'selectedRoles'));
        // return view('backend.user.assign', compact('roles'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $request->validate([
            'role' => 'required',
        ]);

        $user = User::whereId($id)->firstOrFail();

        $user->syncRoles($request->get('role'));

        return back()->with('status', 'User and Roles are Successfully Synchronized!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::whereId($id)->firstOrFail();
        $roles = Role::get();
        $selectedRoles = $user->roles()->pluck('name')->toArray();

        return view('backend.user.edit', compact('user', 'roles', 'selectedRoles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::whereId($id)->firstOrFail();

        $user->syncRoles($request->get('role'));

        return back()->with('status', 'User and Roles are Successfully Edited!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     //
    // }
}
