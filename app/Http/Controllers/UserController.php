<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        $name = "Patrick";
        $data = [
            "name" => $name
        ];
            
    
        return view("user", $data);
    }
}
