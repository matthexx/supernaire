<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\verifyUser;
use Illuminate\Support\Facades\Mail;


class TestController extends Controller
{
    public function index(){
        try{Mail::to(['nelokwaz@gmail.com'])->send(new verifyUser('123565', 'ellyna', 'nelokwaz@gmail.com'));
            return "success";
        
        }
            catch(Exception $e){
                return $e->getMessage();
        }
    }
}
