<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Member extends Model
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
        'category_id',
        'code',
        'email',
        'phone',
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

    /**
     * Category of this member.
     */
    public function category()
    {
        return $this->belongsTo('App\MemberCategory', 'category_id');
    }

    /**
     * Issues of this member.
     */
    public function issues()
    {
        return $this->hasMany('App\Issue');
    }
}
