<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Requests\UserUpdatePasswordRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Log;

class UserController extends Controller
{

    public function index()
    {
        return view('admin/user/index', [
            'users' => User::all(),
        ]);
    }

    public function show($id)
    {
        return view('admin/user/detail', [
            'user' => User::find($id),
        ]);
    }

    public function create() {
        return view('admin/user/create');
    }

    public function store(UserRequest $request) {
        $user = new User;
        $user->fill($request->validated());
        $user->password = Hash::make($request->input('password'));
        $user->save();

        Log::debug('User [id: '.$user->id.'] successfully stored');

        return redirect()->route('admin.user.show', $user->id)
                         ->with('success', 'User stored');
    }

    public function edit($id) {
        return view('admin/user/update', [
            'user' => User::find($id),
        ]);
    }

    public function update($id, UserUpdateRequest $request)
    {
        $user = User::find($id);
        $user->update($request->validated());

        Log::debug('User [id: '.$user->id.'] successfully updated');

        return redirect()->route('admin.user.show', $user->id)
                         ->with('success', 'User updated');
    }

    public function editPassword($id)
    {
        return view('admin/user/update-password', [
            'user' => User::find($id),
        ]);
    }

    public function updatePassword($id, UserUpdatePasswordRequest $request)
    {
        $user = User::find($id);
        $user->password = Hash::make($request->input('password'));
        $user->update();

        Log::debug('User [id: '.$user->id.'] successfully updated');

        return redirect()->route('admin.user.show', $user->id)
                         ->with('success', 'User password updated');
    }

    public function destroy($id)
    {
        User::find($id)->delete();

        Log::debug('User [id: '.$id.'] successfully destroyed');

        return redirect()->route('admin.user.index')
                         ->with('success', 'User destroyed');
    }
}
