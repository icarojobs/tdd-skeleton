<?php

namespace App\Http\Controllers;

use App\Models\User;

class TestController extends Controller
{
    public function getUsers(): void
    {
        $users = User::all();

        dd($users);
    }
}
