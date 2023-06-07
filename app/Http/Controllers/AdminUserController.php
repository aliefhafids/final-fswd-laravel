<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminUserController extends Controller
{
    public function index()
    {
        return view ('dashboard.users.index', [
            'title' => 'Users',
            'active' => 'users',
            'users' => User::paginate(10)
        ]);
    }
}
