<?php

namespace Locadora\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class ReserveItems.
 *
 * @package namespace Locadora\Models;
 */
class ReserveItems extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'reserve_id',
        'vehicle_id'
    ];

    public function reserve()
    {
        return $this->belongsTo(Reserve::class);
    }

    public function vehicle()
    {
        return $this->hasMany(Vehicle::class);
    }

}
