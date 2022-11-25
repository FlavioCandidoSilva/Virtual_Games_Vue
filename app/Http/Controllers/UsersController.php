<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use app\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;

class UsersController extends Controller
{
    public function store(Request $request)
    {
        User::firstOrCreate(['email' => $request->email],[
            Request::validate([
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required'
            ])
            ]);

        return Redirect::route('register');
    }
}
