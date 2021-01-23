<?php

namespace App\Http\Controllers;

use App\Models\Psychologist;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $id = $_SESSION['id'];
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];

        return view('auth.dashboard', [
            'id' => $id,
            'name' => $name,
            'email' => $email,
        ]);
    }

}
