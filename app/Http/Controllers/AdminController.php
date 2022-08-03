<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\StoreAdminRequest;
use App\Http\Requests\Admin\UpdateAdminRequest;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        return view('dashboard.admins.index_admins');
    }


    public function create()
    {

        return view('dashboard.admins.create_admin');
    }


    public function store(StoreAdminRequest $request)
    {
        Admin::create($request->validated());
        session()->flash('success', __('site.added_successfully'));
        return to_route('dashboard.admins.index');
    }


    public function edit(Admin $admin)
    {
        return view('dashboard.admins.edit_admin', ['admin' => $admin]);
    }


    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        $admin->update($request->validated());
        session()->flash('success', __('site.updated_successfully'));
        return to_route('dashboard.admins.index');
    }


    public function destroy(Admin $admin)
    {
        $admin->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.admins.index');
    }
}
