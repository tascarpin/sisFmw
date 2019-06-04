<?php

namespace sisFmw\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Client.
 *
 * @package namespace sisFmw\Models;
 */
class Client extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'telefone',
        'endereco',
        'cidade',
        'estado',
        'cep'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }

}
