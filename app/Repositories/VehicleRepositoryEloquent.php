<?php

namespace Locadora\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Locadora\Repositories\VehicleRepository;
use Locadora\Models\Vehicle;
use Locadora\Validators\VehicleValidator;

/**
 * Class VehicleRepositoryEloquent.
 *
 * @package namespace Locadora\Repositories;
 */
class VehicleRepositoryEloquent extends BaseRepository implements VehicleRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Vehicle::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
