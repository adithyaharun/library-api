<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Publisher extends Model
{
    use SoftDeletes;

    /**
     * Disable incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'photo',
        'active'
    ];

    /**
     * Cast variable type.
     */
    protected $casts = [
        'active' => 'bool'
    ];

    /**
     * The date attributes.
     *
     * @var array
     */
    protected $dates = [
        'deleted_at',
    ];

    /**
     * Booting method.
     */
    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->id = (string)Str::uuid();
        });
    }
}
