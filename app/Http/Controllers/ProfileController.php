<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        /** @var \App\User|null $user */
        $user = Auth::user();

        $newStatements = $user->statements('new')->get();
        $confirmedStatements = $user->statements('confirmed')->get();
        $rejectedStatements = $user->statements('rejected')->get();

        return view('profile.index', ['newStatements' => $newStatements, 'confirmedStatements' => $confirmedStatements, 'rejectedStatements' => $rejectedStatements]);
    }
}
