<?php

namespace sisFmw\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use sisFmw\Repositories\UserRepository;
use sisFmw\Models\User;
use sisFmw\Validators\UserValidator;

/**
 * Class UserRepositoryEloquent.
 *
 * @package namespace sisFmw\Repositories;
 */
class UserRepositoryEloquent extends BaseRepository implements UserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
