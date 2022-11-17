<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WritersController extends Controller
{
    public function index(Request $request) {

        $users = User::all();
        return view('users.index', compact('users'));

    }

    public function show(int $id)
    {
        $user = User::find($id);
        return view('users.show', compact('user'));
    }

}
