<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class AuthController extends Controller 
{
    function signin(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
    }

    function register(Request $req)
    {
        $req->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'country' => 'required'
        ]);
    }
}