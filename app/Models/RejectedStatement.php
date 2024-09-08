<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RejectedStatement extends Model
{
    use HasFactory;

    public $timestamps = false;

    //protected $table = 'rejected-statements';

    function user()
    {
        return $this->BelongsTo(User::class);
    }
}
