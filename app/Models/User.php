<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'full_name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    public $timestamps = false;
    

    public function statements(string $type)
    {
        switch($type){
            case 'new':
                return $this->hasMany(NewStatement::class);
            case 'confirmed':
                return $this->hasMany(ConfirmedStatement::class);
            case 'rejected':
                return $this->hasMany(RejectedStatement::class);
            default:
                throw new Exception('invalid argument, expected "new", "confirmed" or "rejected"');
        }
    }
}
