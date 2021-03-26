<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Itstructure\LaRbac\Interfaces\RbacUserInterface as RbacUserInterface;
use Illuminate\Notifications\Notifiable;
use Itstructure\LaRbac\Traits\Administrable;

class User extends Authenticatable implements RbacUserInterface
{
    use HasFactory, Notifiable, Administrable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'login',
        'email',
        'password',
        'role_id',
        'student_id',
        'teacher_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     */
    public function role() {
        return $this->belongsTo(Role::class); 
    }
}
