<?php

namespace App\Http\Controllers;

use App\Models\Psychologist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        $validData = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $email = $validData['email'];
        $password = $validData['password'];

        if($this->searchEmail($email)){
            $psychologist = $this->searchEmail($email);
            $auth = $this->secureDecrypt($psychologist->password) == $password;
            if($auth){
                session_start();
                $_SESSION['id'] = $psychologist->id;
                $_SESSION['name'] = $psychologist->name;
                $_SESSION['email'] = $psychologist->email;

                if($psychologist->role == 'admin'){
                    if($psychologist->state == 'active'){
                        $_SESSION['role'] = $psychologist->role;
                        return redirect('/dashboard-admin');
                    } else {
                        return redirect('/login');
                    }

                } else {
                    if($psychologist->state == 'active'){
                        $_SESSION['role'] = $psychologist->role;
                        return redirect('/dashboard');
                    } else {
                        return redirect('/login');
                    }

                }
            }
            else{
                return redirect('/login');
            }

        } else {
            return redirect('/login');
        }
    }

    private function searchEmail($email){
        try {
            $psychologist = Psychologist::where('email', $email) -> firstOrFail();
            return $psychologist;
        } catch (\Exception $e) {
            return false;
        }
    }

    private function secureDecrypt(String $passwordCrypt){
        return Crypt::decryptString($passwordCrypt);
    }

    public function logout(){
        session_start();
        session_destroy();
        return redirect('/');
    }
}
