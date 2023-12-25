<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\helloMail;
use App\Mail\SendMail;
use App\Models\store;
use App\Models\User;
use Illuminate\Database\Console\DbCommand;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class MailController extends Controller
{
    public function index(){

        $user = User::where('role','["manager"]')->first();
        // dd($user);
        Mail::to($user->email)->send(new SendMail());
   
    return response()->json(['great check your mail box']);


// } catch (\Throwable $th) {
//     return response()->json(['great check your mail box']);
// }
      
        

    }


}
