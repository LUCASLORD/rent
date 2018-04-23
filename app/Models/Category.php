<?php

namespace Locadora\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Category.
 *
 * @package namespace Locadora\Models;
 */
class Category extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'doors',
        'seats',
        'windows',
        'heating_cooling',
        'transmission',
        'airbag',
        'brakes'
    ];

    public function vehicle()
    {
        return $this->hasMany(Vehicle::class);
    }

}
