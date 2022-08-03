<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        return view('dashboard.users.index_users');
    }


    public function create()
    {

        return view('dashboard.users.create_user');
    }


    public function store(StoreUserRequest $request)
    {     
        User::create($request->validated());
        session()->flash('success', __('site.added_successfully'));
        return to_route('dashboard.users.index');
    }


    public function edit(User $user)
    {
        return view('dashboard.users.edit_user',['user' => $user]);
    }


    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->validated());
        session()->flash('success', __('site.updated_successfully'));
        return to_route('dashboard.users.index');
    }


    public function destroy(User $user)
    {
        $user->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.users.index');
    }
}
