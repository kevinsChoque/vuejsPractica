<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Users;
use App\CrudUsuario;
use App\CrudProfesion;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Users::latest()->paginate(2);
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

        $this->validate($request,[
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:user,email,'.$user->id,
            'password' => 'sometimes|required|min:6'
        ]);

        $currentPhoto = $user->photo;

        if($request->photo != $currentPhoto)
        {
            $name = time().'.' . explode('/', explode(':', substr($request->photo, 0, strpos($request->photo, ';')))[1])[1];
            \Image::make($request->photo)->save(public_path('img/profile/').$name);

            $request->merge(['photo' => $name]);
            
            $userPhoto = public_path('img/profile/').$currentPhoto;
            // return 'esto es ->'.$currentPhoto;
            if(file_exists($userPhoto))
            {
                @unlink($userPhoto);
            }
        }

        // no me servira ya que no estoy trabajando con hash
        // if(!empty($request->password)){
        //     $request->merge(['password' => Hash::make($request['password'])]);
        // }
        // return $request->all();
        $user->update($request->all());
        return ['message' => "Success"];

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

    public function search(){
        if ($search = \Request::get('q')) {
            $users = Users::where(function($query) use ($search){
                $query->where('name','LIKE',"%$search%")
                        ->orWhere('email','LIKE',"%$search%");
            })->paginate(2);
        }else{
            $users = Users::latest()->paginate(5);
        }
        return $users;
    }

    public function guardarUser(Request $request)
    {
        if($request->avatar != '')
        {
            $name = time().'.' . explode('/', explode(':', substr($request->avatar, 0, strpos($request->avatar, ';')))[1])[1];

            \Image::make($request->avatar)->save(public_path('img/profile/').$name);

            $request->merge(['avatar' => $name]);
        }
        // dd($request->avatar);
        return CrudUsuario::create($request->all());
    }

    public function listarProfession()
    {
        return CrudProfesion::get();
        // return ['message' => 'listar todos los usu'];
    }

    public function listarUsuarios()
    {
        // return CrudUsuario::get();
        return CrudUsuario::latest()->paginate(2);
    }

    public function eliminarUsuario(Request $request)
    {
        $user = CrudUsuario::findOrFail($request->id)->delete();
        return ['message' => 'se elimino a ese'];
    }

    public function actualizarUsuario(Request $request,$id)
    {
        $user = CrudUsuario::findOrFail($id);
        if(is_null($user->avatar) && strlen($request->avatar) > 200)
        {
            $name = time().'.' . explode('/', explode(':', substr($request->avatar, 0, strpos($request->avatar, ';')))[1])[1];

            \Image::make($request->avatar)->save(public_path('img/profile/').$name);

            $request->merge(['avatar' => $name]);

            // return ['message' => 'si'];
        }

        if(!is_null($user->avatar) && strlen($request->avatar) > 200)
        {
            $userPhoto = public_path('img/profile/').$user->avatar;
            // return 'esto es ->'.$currentPhoto;
            if(file_exists($userPhoto))
            {
                @unlink($userPhoto);
            }

            $name = time().'.' . explode('/', explode(':', substr($request->avatar, 0, strpos($request->avatar, ';')))[1])[1];

            \Image::make($request->avatar)->save(public_path('img/profile/').$name);

            $request->merge(['avatar' => $name]);
        }
        
        $user->update($request->all());

        return ['message' => 'el usuario a sido actualizado al tope'];
    }
}
