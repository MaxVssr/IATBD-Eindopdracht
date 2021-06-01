<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \App\Models\User;

class UsersController extends Controller
{
    
    public function show() {
        if(Auth::user()) {
            return view ('dashboard', [
                $id = auth()->user()->id,
                'user' => User::find($id),
                'owned_products' => User::find($id)->allOwnedProducts,
                'lend_products' => User::find($id)->allLendProducts,
            ]);
        }
    }

}
