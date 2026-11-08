<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    // User Accounts page (/users).
    public function list()
    {
        // Data now comes from the users table through the User model.
        $users = User::orderBy('id')->get();

        return view('users.index', ['users' => $users]);
    }
}
