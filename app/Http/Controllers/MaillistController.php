<?php

namespace App\Http\Controllers;

use App\Models\Maillist;
use Illuminate\Http\Request;

class MaillistController extends Controller
{
    //

    public function store(Request $request)

    {
        //Sign up for new post updates

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email'],
        ]);

        $maillist = Maillist::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->back();

    }
}
