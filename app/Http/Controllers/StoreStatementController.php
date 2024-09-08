<?php

namespace App\Http\Controllers;

use App\Models\NewStatement;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreStatementController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $formData = $request->validate([
            'car_number' => 'required|min:3|max:12',
            'description' => 'required|max:1024'
        ]);

        $statement = new NewStatement;

        $statement->car_number = $formData['car_number'];
        $statement->description = $formData['description'];
        $statement->user_id = Auth::id();

        $statement->save();

        return back()->with('message', 'Ваше заявление принято на обработку');
    }

    public function showForm()
    {
        return view('statements.create');
    }
}
