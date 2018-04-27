<?php

namespace Locadora\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Locadora\Repositories\Reserve_ItemsRepository;
use Locadora\Models\ReserveItems;
use Locadora\Validators\ReserveItemsValidator;

/**
 * Class ReserveItemsRepositoryEloquent.
 *
 * @package namespace Locadora\Repositories;
 */
class ReserveItemsRepositoryEloquent extends BaseRepository implements ReserveItemsRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ReserveItems::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
