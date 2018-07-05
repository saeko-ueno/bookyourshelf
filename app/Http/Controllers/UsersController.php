<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Userモデルの参照
use App\User; //add

class UsersController extends Controller
{
    //ユーザーページの表示
     public function show($id){
         $user=User::find($id);
         
        $data = [
            'user' => $user,
        ];
         return view('users.show', $data);
     }
}