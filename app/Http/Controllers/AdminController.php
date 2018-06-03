<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

 
class AdminController extends Controller
{
     use RegistersUsers;

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function dashboard()
    {
    	/* Views Dashbord */
    	return View('Admin/dashboard');
    }

    public function ListUsers()
    {
    	/* Views Dashbord */
         $users = User::all();
    	return View('Admin/users')->with(compact('users', $users));
    }

     public function CreateUsers()
    {
    	/* Views Dashbord */
    	return View('Admin/users-create');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $request)
    {
        $input = $request->all();
        $user = array(
            'name'=>$input['name'],
            'email'=>$input['email'],
            'password'=>Hash::make($input['password']),
            'rulesid'=>$input['condicao']
        );
            $users = new User();
            $users = $users->create($user);
            \Session::flash('insert_ok', 'Usuário cadastrado com sucesso!');
        // redireccionamos a Users.
        return View('Admin/users');
    }

    public function UsersUpdate(Request $request,User $id)
    {
        $users = User::all();
    	return View('Admin/users-update')->with(compact('users', $users));
         request()->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        $id->update($request->all());
        return redirect()->route('adminhtml.template.users')
                        ->with('success','Member updated successfully');
    }

    public function deletar(Request $request,User $id)
    {
    $user = User::findOrFail($id);
    $user->delete();
    \Session::flash('delete_ok', 'Usuario excluido com sucesso!');
    return Redirect::to('users');
    }

    
}
