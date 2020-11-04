<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'phone', 'user_id', 'address', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roleLib($id)
    {
        $user = User::where('id', $id)->first();

        if($user->role == 'librarian'){
            return true;
        }else{
            return false;
        }
    }

    public function roleUser($id)
    {
        $user = User::where('id', $id)->first();

        if($user->role == 'user'){
            return true;
        }else{
            return false;
        }
    }

    public function requests()
    {
        return $this->hasMany(Requests::class);
    }
}
