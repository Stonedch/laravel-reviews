<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StatusRequest;
use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        return view('admin/status/index', [
            'statuses' => Status::all(),
        ]);
    }

    public function show($id)
    {
        return view('admin/status/detail', [
            'status' => Status::find($id),
        ]);
    }

    public function create()
    {
        return view('admin/status/create');
    }

    public function store(StatusRequest $request)
    {
        $status = new Status;
        $status->fill($request->validated());
        $status->save();

        return redirect()->route('admin.status.show', $status->id)
                         ->with('success', 'Status stored');
    }

    public function edit($id)
    {
        return view('admin/status/update', [
            'status' => Status::find($id),
        ]);
    }

    public function update($id, StatusRequest $request)
    {
        $statuse = Status::find($id);
        $statuse->update($request->validated());

        return redirect()->route('admin.status.show', $statuse->id)
                         ->with('success', 'Status updated');
    }

    public function destroy($id)
    {
        Status::find($id)->delete();

        return redirect()->route('admin.status.index')
                         ->with('success', 'Status destroyed');
    }
}

