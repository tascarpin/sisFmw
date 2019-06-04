<?php

namespace sisFmw\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use sisFmw\Repositories\OrderItemRepository;
use sisFmw\Models\OrderItem;
use sisFmw\Validators\OrderItemValidator;

/**
 * Class OrderItemRepositoryEloquent.
 *
 * @package namespace sisFmw\Repositories;
 */
class OrderItemRepositoryEloquent extends BaseRepository implements OrderItemRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return OrderItem::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
