<?php

namespace App\JsonApi\Vacantes;

use Neomerx\JsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{

    /**
     * @var string
     */
    protected $resourceType = 'vacantes';

    /**
     * @param $resource
     *      the domain record being serialized.
     * @return string
     */
    public function getId($resource)
    {
        return (string) $resource->getRouteKey();
    }

    /**
     * @param $resource
     *      the domain record being serialized.
     * @return array
     */
    public function getAttributes($resource)
    {
        return [
            'created-at' => $resource->created_at->toAtomString(),
            'updated-at' => $resource->updated_at->toAtomString(),
            'salary' => $resource->salary,
            'name' => $resource->name,
            'description' => $resource->description,
        ];
    }

    public function getRelationships($resource, $isPrimary, array $includeRelationships)
    {
        return [
            'usuarios' => [
                self::SHOW_RELATED => true,
            ],
            'cargos' => [
                self::SHOW_RELATED => true,
            ],
            'areas' => [
                self::SHOW_RELATED => true,
            ],
            'empresas' => [
                self::SHOW_RELATED => true,
            ],
        ];
    }
}
