<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Admin(){

$users = User::get();
return view('backend.layouts.master',compact('users'));
}

}
