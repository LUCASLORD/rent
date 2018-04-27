<?php

namespace Locadora\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Locadora\Repositories\RentRepository;
use Locadora\Models\Rent;
use Locadora\Validators\RentValidator;

/**
 * Class RentRepositoryEloquent.
 *
 * @package namespace Locadora\Repositories;
 */
class RentRepositoryEloquent extends BaseRepository implements RentRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Rent::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
