<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        return view('admin/role/index', [
            'roles' => Role::all(),
        ]);
    }

    public function show($id)
    {
        return view('admin/role/detail', [
            'role' => Role::find($id),
        ]);
    }

    public function create()
    {
        return view('admin/role/create');
    }


    public function store(RoleRequest $request)
    {
        $role = new Role;
        $role->fill($request->validated());
        $role->save();

        return redirect()->route('admin.role.show', $role->id)
                         ->with('success', 'Role added');
    }

    public function edit($id) {
        return view('admin/role/update', [
            'role' => Role::find($id),
        ]);
    }

    public function update($id, RoleRequest $request) {
        $role = Role::find($id);
        $role->fill($request->validated());
        $role->update();

        return redirect()->route('admin.role.show', $role->id)
                         ->with('success', 'Role updated');
    }

    public function destroy($id) {
        Role::find($id)->delete();
        return redirect()->route('admin.role.index')
                         ->with('success', 'Role destroyed');
    }
}
