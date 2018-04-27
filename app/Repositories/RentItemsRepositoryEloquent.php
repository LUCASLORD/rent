<?php

namespace Locadora\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Locadora\Repositories\Rent_ItemsRepository;
use Locadora\Models\RentItems;
use Locadora\Validators\RentItemsValidator;

/**
 * Class RentItemsRepositoryEloquent.
 *
 * @package namespace Locadora\Repositories;
 */
class RentItemsRepositoryEloquent extends BaseRepository implements RentItemsRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return RentItems::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
