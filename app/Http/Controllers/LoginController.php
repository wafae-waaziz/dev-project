<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{

    protected $redirectTo = 'profeseur/dashboard';
    public function login(Request $request)
    {   echo 'hello' ;
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            echo $user->role;

            switch ($user->role) {
                case User::ROLE_ETUDIANT:
                    return redirect()->intended('/etudiant/dashboard');
                case User::ROLE_PROFESSEUR:
                    return redirect()->intended('/professeur/dashboard');
                case User::ROLE_RESPONSABLE_FILIERE:
                    return redirect()->intended('/responsable-filiere/dashboard');
                case User::ROLE_CHEF_DEPARTEMENT:
                    return redirect()->intended('/chef-de-departement/dashboard');
                case User::ROLE_RESPONSABLE_PEDAGOGIQUE:
                    return redirect()->intended('/responsable-pedagogique/dashboard');
                default:
                    return redirect()->intended('/');
            }
        }

        return redirect()->back()->withErrors(['email' => 'Invalid login credentials']);
    }
}
