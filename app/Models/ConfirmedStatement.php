<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfirmedStatement extends Model
{
    use HasFactory;

    //protected $table = 'confirmed-statements';

    public $timestamps = false;

    function user()
    {
        return $this->BelongsTo(User::class);
    }
}
