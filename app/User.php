<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
<<<<<<< HEAD
        'fullname','username','email','phone','password','position','address',
=======
        'name', 'email', 'password',
>>>>>>> 1e7b2651de78a175a21a2a2ba25fc95e988905ee
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
<<<<<<< HEAD
    public function project(){
      return $this->hasMany(Project::class);
   }
=======
>>>>>>> 1e7b2651de78a175a21a2a2ba25fc95e988905ee
}
