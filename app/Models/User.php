<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 *
 * Properties
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * Relationships
 * @property Article $articles
 */
class User extends Authenticatable
{
    use Notifiable;

    #region Properties

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    #endregion

    #region Relationships

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles()
    {
        return $this->hasMany( Article::class );
    }

    #endregion

}
