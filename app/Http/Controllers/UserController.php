<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    /* rimanda alla pagina di registrazione */
    public function create()
    {
        return view('UserRegister');
    }

    /* register esegue la registrazione del nuovo utente
        passando come parametro User $user
        istanzio un nuovo user $user=new User;
    */
    public function register(Request $request, User $user)
    {
        $array = $request->all(); // riceve i parametri e li inserisce in un array

        // solo con la funzione create posso salvare l'utente come un array
       $user->create([
            'firstName' => $array['firstName'],
            'lastName'  => $array['lastName'],
            'username'  => $array['username'],
            'password'  => bcrypt($array['password']),
            'email'     => $array['email'],
       ]);

       return 'utente registrato';
    }

    public function getLogin()
    {
        return view('LoginUser');
    }

    public function login(Request $request)
    {
        $user = $request->all();
      //  dd($user);
        if(Auth::attempt([
            'username' =>$user['username'],
            'password' => $user['password']
        ]))
        {
            $user = User::where('username',$request->username)->first();
            return [
                'username'=> $user->username,
                 'password'=>$user->password,
            ];
        }
    }

}
