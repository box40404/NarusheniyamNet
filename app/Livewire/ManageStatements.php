<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\NewStatement;
use App\Models\ConfirmedStatement;
use App\Models\RejectedStatement;

class ManageStatements extends Component
{

    public function accept($id)
    {
        $statement = NewStatement::find($id);

        $confirmedStatement = new ConfirmedStatement;

        $confirmedStatement->description = $statement->description;
        $confirmedStatement->car_number = $statement->car_number;
        $confirmedStatement->user_id = $statement->user_id;

        $confirmedStatement->save();
        $statement->delete();
    }

    public function reject($id)
    {
        $statement = NewStatement::find($id);

        $rejectedStatement = new RejectedStatement;

        $rejectedStatement->description = $statement->description;
        $rejectedStatement->car_number = $statement->car_number;
        $rejectedStatement->user_id = $statement->user_id;

        $rejectedStatement->save();
        $statement->delete();
    }


    public function render()
    {
        $newStatements = NewStatement::all();
        $confirmedStatements = ConfirmedStatement::all();
        $rejectedStatements = RejectedStatement::all();

        return view('livewire.manage-statements', ['newStatements' => $newStatements, 'confirmedStatements' => $confirmedStatements, 'rejectedStatements' => $rejectedStatements]);
    }
}
