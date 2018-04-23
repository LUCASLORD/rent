<?php

namespace Locadora\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Locadora\Repositories\LeasingRepository;
use Locadora\Models\Leasing;
use Locadora\Validators\LeasingValidator;

/**
 * Class LeasingRepositoryEloquent.
 *
 * @package namespace Locadora\Repositories;
 */
class LeasingRepositoryEloquent extends BaseRepository implements LeasingRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Leasing::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
