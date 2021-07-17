<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Carbon\Carbon;
/**
 * Class Article
 *
 * @property bigint $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property enum $type ('Admin','Visitor')
 * @property string $remeber_token
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */

class User extends Authenticatable
{
    protected $table = 'users';
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'type',
        'password',
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
     * @var array
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

    public function articles()
  	{
  		return $this->hasMany(Article::class);
  	}

    public function comments()
  	{
  		return $this->hasMany(Comment::class);
  	}

}
