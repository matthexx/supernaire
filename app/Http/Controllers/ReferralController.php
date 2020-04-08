<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;




class ReferralController extends Controller
{
    protected $superRef = "SRC345";


    public function genRandCode()
    {
        $ref = mt_rand(100000, 999999);

        $user = User::select( 'name')->first();

        $refvalue = str_limit($user->name, 2);

        $refCode = $ref + $refvalue;
    
    }

    

    



}
