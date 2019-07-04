<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UserController extends Controller
{
    public function index()
    {
        $users=Users::orderBy('id','ASC')->paginate(15);
        return view('usergrid',compact('users'));

    }

    public function create()
    {
        $method = 'create';
        return view('users')->with('method',$method);
    }

    public function store(Request $request)
    {
      /*$this->validate($request,
                      ['name'=>'name',
                       'email'=>'email',
                       'password'=>'password',
                     ]);*/

        $user = new Users([
            'name' => $request->get('name'),
            'email'=> $request->get('email'),
            'password'=> $request->get('password'),
            'roles_id'=> $request->get('roles_id'),
            'permissions_id'=> $request->get('permissions_id')
        ]);

        $user->save();

        return redirect()->route('users.index')->with('success','Registro creado satisfactoriamente');

    }

    public function edit($id)
    {
        $users = Users::find($id);
        $method = 'edit';
        return view('users', compact('users'))->with('method',$method);
    }

    public function update(Request $request, $id)
    {
        $user = Users::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->roles_id = $request->get('roles_id');
        $user->permissions_id = $request->get('permissions_id');
        $user->save();

        return redirect()->route('users.index')->with('success', 'Stock has been updated');
    }

    public function destroy($id)
    {
        $user = Users::find($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'Stock has been deleted Successfully');
    }

    public function show($id)
    {
        $users = Users::find($id);
        $method = 'show';
        return view('users', compact('users'))->with('method',$method);
    }
}
