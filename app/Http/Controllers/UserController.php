<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // ambil data dari table users

        // Eloquent (menggunakan model)
        $users = User::all();
        // dd($users);
        // query builder
        // SELECT * FROM USER
        // $users = DB::table('users')->get();

        return view('backend.user.index',[
            'users' => $users,
        ]);
    }
}
