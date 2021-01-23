<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function index(){
        $id = $_SESSION['id'];
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];

        return view('auth.dashboardAdmin', [
            'id' => $id,
            'name' => $name,
            'email' => $email,
        ]);
    }
}
