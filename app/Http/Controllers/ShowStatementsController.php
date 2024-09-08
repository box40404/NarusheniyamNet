<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowStatementsController extends Controller
{
    public function pending()
    {
        /** @var \App\User|null $user */
        $user = Auth::user();

        $newStatements = $user->statements('new')->get();

        return view('statements.pending', ['statements' => $newStatements]);
    }

    public function confirmed()
    {
        /** @var \App\User|null $user */
        $user = Auth::user();

        $confirmedStatements = $user->statements('confirmed')->get();

        return view('statements.confirmed', ['statements' => $confirmedStatements]);
    }

    public function rejected()
    {
        /** @var \App\User|null $user */
        $user = Auth::user();

        $rejectedStatements = $user->statements('rejected')->get();

        return view('statements.rejected', ['statements' => $rejectedStatements]);
    }
}
