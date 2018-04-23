<?php

namespace Locadora\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Locadora\Repositories\ReserveRepository;
use Locadora\Models\Reserve;
use Locadora\Validators\ReserveValidator;

/**
 * Class ReserveRepositoryEloquent.
 *
 * @package namespace Locadora\Repositories;
 */
class ReserveRepositoryEloquent extends BaseRepository implements ReserveRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Reserve::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
