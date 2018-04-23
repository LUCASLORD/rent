<?php

namespace Locadora\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Image.
 *
 * @package namespace Locadora\Models;
 */
class Image extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'vehicle_id',
        'image_url'
    ];

    public function vehicles()
    {
        return $this->belongsTo(Vehicle::class);
    }

}
