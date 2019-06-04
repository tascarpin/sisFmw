<?php

namespace sisFmw\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use sisFmw\Repositories\ClientRepository;
use sisFmw\Models\Client;
use sisFmw\Validators\ClientValidator;

/**
 * Class ClientRepositoryEloquent.
 *
 * @package namespace sisFmw\Repositories;
 */
class ClientRepositoryEloquent extends BaseRepository implements ClientRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Client::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
