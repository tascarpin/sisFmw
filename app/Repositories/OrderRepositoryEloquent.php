<?php

namespace sisFmw\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use sisFmw\Repositories\OrderRepository;
use sisFmw\Models\Order;
use sisFmw\Validators\OrderValidator;

/**
 * Class OrderRepositoryEloquent.
 *
 * @package namespace sisFmw\Repositories;
 */
class OrderRepositoryEloquent extends BaseRepository implements OrderRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Order::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
