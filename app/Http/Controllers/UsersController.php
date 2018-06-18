<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Hashing\Hasher;
use Illuminate\Support\Facades\Hash;
use App\User; 
use Auth;
use Image;
use File;

class UsersController extends Controller
{

    /////////////////////////////////////////////////
    //                   LIST                      //
    /////////////////////////////////////////////////

    public function index(Request $request)
    {
        $name = $request->get('name');
        $perPage = 25;

        if ($name != ''){
                $users = User::where('name', 'LIKE', "%$title%")->orderBy('id', 'ASC')->paginate(10);
            } else {
                $users = User::orderBy('id', 'ASC')->paginate(10);
        }
        return view('vadmin.users.index')->with('users', $users);
    }

    /////////////////////////////////////////////////
    //                   CREATE                    //
    /////////////////////////////////////////////////
    
    public function create(Request $request)
    {
        return view('vadmin.users.create');
    }
    public function store(Request $request)
    {
        
       $this->validate($request,[
            'name'              => 'min:4|max:20|required',
            'email'             => 'min:3|max:250|required|unique:users,email',
            'password'          => 'min:4|max:120|required|',
            'role'              => 'required',
            'groups'            => 'required',
        ],[
            'name.required'     => 'Debe ingresar un nombre',
            'name.min'          => 'El nombre debe tener 4 caracteres como mínimo',
            'name.max'          => 'El nombre debe tener 20 caracteres como máximo',
            'email.required'    => 'Debe ingresar un email',
            'email.unique'      => 'El email pertenece a otro usuario registrado',
            'email.min'         => 'El E-Mail debe tener 3 caracteres como mínimo',
            'email.max'         => 'El E-Mail debe tener 250 caracteres como máximo',
            'password.required' => 'Se requiere una contraseña',
            'password.min'      => 'La contraseña debe tener 4 caracteres como mínimo',
            'password.max'      => 'La contraseña debe tener 120 caracteres como máximo',
            'role.required'     => 'El usuario debe tener rol',
            'groups.required'   => 'El usuario debe pertenecer a un grupo'
        ]);

        $user           = new User($request->all());
        $user->password = Hash::make($request->password);
        $user->save();
        
        return redirect('vadmin/users')->with('message', 'Usuario '.$user->name.' creado.');
    }

    /////////////////////////////////////////////////
    //                   UPDATE                    //
    /////////////////////////////////////////////////
    
    
    public function edit($id)
    {
        $user = User::find($id);
        return view('vadmin.users.edit')->with('user', $user);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $this->validate($request,[
            'name'              => 'min:4|max:20|required',
            'email'             => 'min:3|max:250|required|unique:users,email,'.$user->id,
            // 'password'          => 'min:4|max:120|required|',
            'role'              => 'required',
            'groups'            => 'required',
        ],[
            'name.required'     => 'Debe ingresar un nombre',
            'name.min'          => 'El nombre debe tener 4 caracteres como mínimo',
            'name.max'          => 'El nombre debe tener 20 caracteres como máximo',
            'email.required'    => 'Debe ingresar un email',
            'email.unique'      => 'El email pertenece a otro usuario registrado',
            'email.min'         => 'El E-Mail debe tener 3 caracteres como mínimo',
            'email.max'         => 'El E-Mail debe tener 250 caracteres como máximo',
            //'password.required' => 'Se requiere una contraseña',
            //'password.min'      => 'La contraseña debe tener 4 caracteres como mínimo',
            //'password.max'      => 'La contraseña debe tener 120 caracteres como máximo',
            'role.required'     => 'El usuario debe tener rol',
            'groups.required'   => 'El usuario debe pertenecer a un grupo'
        ]);

        $user = User::find($id);
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->save();
        
        return redirect('vadmin/users')->with('message', 'Usuario '.$user->name.' actualizado.');
    }

    public function updatePassword()
    {
        dd('ok');
    }

    /////////////////////////////////////////////////
    //             PROFILE                         //
    /////////////////////////////////////////////////


    // ---------- Profile --------------- //
    public function profile()
    {
        return view('vadmin.users.profile', ['user' => Auth::user() ] );
    }


    // ---------- Update Avatar --------------- //
    public function updateAvatar(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $avatar   = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('images/users/' . $filename ) );
        
            if (Auth::user()->avatar != "user-gen.jpg") {
                $path = 'images/users/';
                $lastpath= Auth::user()->avatar;
                File::Delete(public_path( $path . $lastpath) );
            }
            
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();

            return view('vadmin.users.profile', array('user' => Auth::user() ) );
        }
    }

    
    /////////////////////////////////////////////////
    //                     DELETE                  //
    /////////////////////////////////////////////////

    public function destroy($id)
    {
        $user = User::find($id);
        $path = 'images/users/';

        try {
            if($user->avatar == 'user-gen.jpg'){
            } else {
                File::Delete(public_path( $path . $user->avatar));
            }
            $user->delete();

            return response()->json([
                "result"   => 1,
                ]);  
                
            } catch (Exception $e) {
                return response()->json([
                    "result"   => 0,
                    "error"    => $e
                ]);    
        }

    }

    // ---------- Ajax Bach Delete -------------- //
    public function ajax_batch_delete(Request $request, $id)
    {        
        $path     = 'webimages/portfolio/';
        foreach ($request->id as $id) {
            try {
                foreach ($request->id as $id) {
                    $user  = User::find($id);
                    if($user->avatar != '' || $user->avatar != null)
                    {
                        File::Delete(public_path( $path . $user->avatar));
                    }
                    User::destroy($id);
                }
                
            } catch (Exception $e) {
                return response()->json([
                    "result"   => 0,
                    "error"    => $e
                    ]);    
                }
            }
        echo 1;
    }       

} // End