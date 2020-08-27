<?php

namespace App\Http\Controllers\Admin;

use App\Models\Users;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Requests\UserUpdatePasswordRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller {

    public function getAll() {
        $users = Users::all();
        $context = ['users' => $users];

        return view('admin/user/all', $context);
    }

    public function getDetail($id) {
        $user = Users::find($id);
        $context = ['user' => $user];

        return view('admin/user/detail', $context);
    }

    public function delete($id) {
        $user = Users::find($id);
        $user->delete();

        return redirect()->route('admin.users.index')->with('success', 'Пользователь был удален.');
    }

    public function create() {
        return view('admin/user/create');
    }

    public function createSubmit(UserRequest $request) {
        $user = new Users;

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));

        $user->save();

        return redirect()->route('admin.users.detail', $user->id)->with('success', 'Пользователь был добавлен.');
    }

    public function update($id) {
        $user = Users::find($id);
        $context = ['user' => $user];

        return view('admin/user/update', $context);
    }

    public function updateSubmit($id, UserUpdateRequest $request) {
        $user = Users::find($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');

        $user->update();

        return redirect()->route('admin.users.detail', $user->id)->with('success', 'Пользователь был обновлен.');
    }

    public function updatePassword($id) {
        $user = Users::find($id);
        $context = ['user' => $user];

        return view('admin/user/update-password', $context);
    }

    public function updatePasswordSubmit($id, UserUpdatePasswordRequest $request) {
        $user = Users::find($id);

        $user->password = Hash::make($request->input('password'));

        $user->update();

        return redirect()->route('admin.users.detail', $user->id)->with('success', 'Пользователь был обновлен.');
    }

}
