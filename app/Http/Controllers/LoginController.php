<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /** 
     * Handle an authentication attempt.
     *
     * @return Response
     */

   public function showLoginForm()
   {
    return View('login');
   } 

   public function Login(Request $request)
   {
        $data  = array(
            'email' =>$request->get('email'),
            'password'=>$request->get('password')
        );


        if(Auth::attempt($data))
        {
            return redirect()->guest('painel');
        }
        else
        {
             \Session::flash('Error', 'Usuário ou senha incorretos!');
            return redirect('/');
        }

   }

   public function logout()
   {
    Auth::logout();
    return redirect('/');
   }

   /* Esqqueceu a senha */

   public function forgot()
   {
    return View('Admin/forgot');
   }

   public function forgotPassword(Request $request)
   {
  

   }

   public function forgotSent(Request $request)
   {
    $data  = array(
            'email' =>$request->get('email')
          
      );


    return View('Admin/forgot-sent');
   }


   public function forgotReset()
   {
    return View('Admin/forgot-reset');
   }

   public function forgotResetSucess()
   {
    return View('Admin/forgot-reset-success');
   }

}
