<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
    	$user = \Auth::user();
    	// dd($user->hasRole('owner'));
    	// dd($user->hasRole('admin')); //false
    	// dd($user->can('edit-user')); //true

        return view('home');
    }
}
