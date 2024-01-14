<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::where('id', 2)->get();
        $id = Auth::user();

        return view('user.index', ['users' => $users, 'teste' => $id]);
    }

    public function create(){
        return view('user.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);

        $newUser = User::create($data);

        return redirect(route('user.index'));
    }

    public function edit(User $user){
        return view('user.edit', ['user' => $user]);
    }

    public function update(User $user, Request $request){
        $data = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);

        $user->update($data);

        return redirect(route('user.index'));
    }

    public function delete(User $user){
        $user->delete();

        return redirect(route('user.index'));
    }
}
