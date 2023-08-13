<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user_view(){
        $data['allData']=User::all();
        return view('backend.users.view_users',compact('data'));
    }
}
