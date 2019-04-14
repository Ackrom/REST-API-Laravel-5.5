<?php

namespace App\JsonApi\Vacantes;

use CloudCreativity\LaravelJsonApi\Eloquent\AbstractAdapter;
use CloudCreativity\LaravelJsonApi\Pagination\StandardStrategy;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class Adapter extends AbstractAdapter
{

    /**
     * Mapping of JSON API attribute field names to model keys.
     *
     * @var array
     */
    protected $attributes = [];
    /**
     * @var array
     */
    protected $relationships = [
        'empresas',
        'usuarios',
        'cargos',
        'areas',
    ];
    /**
     * Adapter constructor.
     *
     * @param StandardStrategy $paging
     */
    public function __construct(StandardStrategy $paging)
    {
        parent::__construct(new \App\Vacantes(), $paging);
    }

    /**
     * @param Builder $query
     * @param Collection $filters
     * @return void
     */
    protected function filter($query, Collection $filters)
    {
        // TODO
    }
    protected function empresas(){
        return $this->belongsTo();
    }
    protected function usuarios(){
        return $this->hasMany();
    }
    protected function cargos(){
        return $this->hasMany();
    }
    protected function areas(){
        return $this->hasMany();
    }

}
