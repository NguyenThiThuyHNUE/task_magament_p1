<?php


namespace App\Repository\impl;


use App\Repository\UserRepositoryInterface;
use App\User;
use http\Env\Request;
use Illuminate\Support\Facades\Auth;

class UserRepository implements UserRepositoryInterface
{

    public function getAll(){
        return User::all();
    }

    public function edit($id){
        return  User::findorfail($id);
    }
    public function update( $id, $request)
    {
        $users =  User::findorfail($id);

        return $users->update($request->all());
    }
    public function show($id)
    {
       return User::findorfail($id);
    }

    public function delete($id)
    {
        $users =  User::findorfail($id);
       return $users->delete();
    }



    public function store($user)
    {

        $user->save();
    }

    public function show_profile()
    {
        return Auth::user();
    }
}
