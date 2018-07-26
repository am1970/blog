<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 *
 * Properties
 * @property integer $id
 * @property integer $user_id
 * @property string $title
 * @property string $text
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * Relationships
 * @property User $user
 */
class Article extends Model
{
    #region Properties

    /**
     * @var array
     */
    protected $fillable = [
        'user_id',
        'title',
        'text',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'user_id' => 'integer',
        'title' => 'string',
        'text' => 'string',
    ];

    #endregion

    #region Relationships

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo( User::class );
    }

    #endregion
}
