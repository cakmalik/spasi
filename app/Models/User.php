<?php

namespace App\Models;

use App\Models\Setup\Role;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

   
    protected $fillable = [
        'name',
        'email',
        'password',
        'level',
        'username',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function adminlte_image()
    {
        return asset('images/incognito.png');
    }

    public function adminlte_desc()
    {
        return 'That\'s nice guy';
    }

    public function adminlte_profile_url()
    {
        return 'profile';
    }

    public function role()
    {
        return $this->hasOne(Role::class);
    }
}
