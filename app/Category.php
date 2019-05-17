<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
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
}
