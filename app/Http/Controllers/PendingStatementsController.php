<?php

namespace App\Http\Controllers;

use App\Models\NewStatement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PendingStatementsController extends Controller
{
    public function show()
    {
        Gate::authorize('manage-statements');

        return view('admin.pending-statements');
    }
}
