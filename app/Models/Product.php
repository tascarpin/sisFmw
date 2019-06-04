<?php

namespace sisFmw\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Product.
 *
 * @package namespace sisFmw\Models;
 */
class Product extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'nome',
        'estoqueMaximo',
        'estoqueMinimo',
        'precoCompra',
        'precoVenda',
        'status'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

}
