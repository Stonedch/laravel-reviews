<?php

namespace App\Http\Controllers\Admin;

use App\Models\Status;
use App\Http\Controllers\Controller;
use App\Http\Requests\StatusesRequest;
use Illuminate\Http\Request;

class StatusesController extends Controller {

    public function getAll() {
        $statuses = Status::all();
        $context = ['statuses' => $statuses];

        return view('admin/statuse/all', $context);
    }

    public function getDetail($id) {
        $statuse = Status::find($id);
        $context = ['statuse' => $statuse];

        return view('admin/statuse/detail', $context);
    }

    public function create() {
        return view('admin/statuse/create');
    }

    public function createSubmit(StatusesRequest $request) {
        $statuse = new Status;

        $statuse->name = $request->input('name');
        $statuse->slug = $request->input('slug');
        $statuse->color_bg = $request->input('color_bg');
        $statuse->color_fg = $request->input('color_fg');

        $statuse->save();

        return redirect()->route('admin.statuses.detail', $statuse->id)->with('success', 'Статус был добавлен.');
    }

    public function update($id) {
        $statuse = Status::find($id);
        $context = ['statuse' => $statuse];

        return view('admin/statuse/update', $context);
    }

    public function updateSubmit($id, StatusesRequest $request) {
        $statuse = Status::find($id);

        $statuse->name = $request->input('name');
        $statuse->slug = $request->input('slug');
        $statuse->color_bg = $request->input('color_bg');
        $statuse->color_fg = $request->input('color_fg');

        $statuse->update();

        return redirect()->route('admin.statuses.detail', $statuse->id)->with('success', 'Статус был обновлен.');
    }

    public function delete($id) {
        $statuse = Status::find($id);
        $statuse->delete();

        return redirect()->route('admin.statuses.index')->with('success', 'Статус был удален.');
    }

}

