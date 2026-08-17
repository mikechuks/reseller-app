<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();

        return view('admin.view_user', compact('users'));
    }

    public function create()
    {
        return view('admin.insert_user');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'username'   => 'required|unique:users',
            'email'      => 'required|email|unique:users',
            'phone'      => 'required',
            'password'   => 'required|min:8'
        ]);

        User::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'username'   => $request->username,
            'email'      => $request->email,
            'phone'      => $request->phone,
            'password'   => Hash::make($request->password)
        ]);

        return redirect()
            ->route('user.create')
            ->with('success', 'User created successfully');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('admin.update_user', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'username'   => 'required|unique:users,username,' . $user->id,
            'email'      => 'required|email|unique:users,email,' . $user->id,
            'phone'      => 'required'
        ]);

        $user->update([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'username'   => $request->username,
            'email'      => $request->email,
            'phone'      => $request->phone,
        ]);

        return redirect()
            ->route('user.edit')
            ->with('success', 'User updated successfully');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()
            ->route('user.index')
            ->with('success', 'User deleted successfully');
    }
}