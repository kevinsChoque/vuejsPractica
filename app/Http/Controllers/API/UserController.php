<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Users;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Users::latest()->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           'name' =>'required|string|max:191',
           'email' =>'required|string|email|max:191|unique:user',
           'password' =>'required|string|min:6'
        ]);

        // return User::create([
        //     'name' => $request['name'],
        //     'email' => $request['email'],
        //     'type' => $request['type'],
        //     'bio' => $request['bio'],
        //     'photo' => $request['photo'],
        //     'password' => Hash::make($request['password']),
        // ]);

        // return ['message' => 'i have your data'];
        return Users::create($request->all());
    }

    public function updateProfile(Request $request)
    {
        $user = Users::findOrFail(1);
        return $request->photo;
        // return ['message' => "updateProfile entro"];

    }

    public function profile()
    {
        return Users::findOrFail(1);
        // return ['message' => "profile entro"];
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $user = Users::findOrFail($id);

        $this->validate($request,[
            'name' =>'required|string|max:191',
            'email' =>'required|string|email|max:191|unique:user,email,'.$user->id,
            'password' =>'required|string|min:6'
        ]);
         
        $user->update($request->all());
        
        return['message' => 'updated the user info'];
    }

    public function destroy($id)
    {
        $user = Users::findOrFail($id);
        $user->delete();
        return ['message' => 'user deleted'];
    }
}
