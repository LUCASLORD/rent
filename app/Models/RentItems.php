<?php

namespace Locadora\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class RentItems.
 *
 * @package namespace Locadora\Models;
 */
class RentItems extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rent_id',
        'vehicle_id',
        'price'
    ];

    public function rent()
    {
        return $this->belongsTo(Rent::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'id', 'id');
    }
}
