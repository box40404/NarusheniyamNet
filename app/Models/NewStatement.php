<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewStatement extends Model
{
    use HasFactory;

    //protected $table = 'new-statements';

    public $timestamps = false;

    function user()
    {
        return $this->BelongsTo(User::class);
    }
}
