<?php

namespace App\JsonApi\Usuarios;

use Neomerx\JsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{

    /**
     * @var string
     */
    protected $resourceType = 'usuarios';

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
            'name' => $resource->name,
            'email' => $resource->email,
            '_type' => $resource->type,
        ];
    }

    public function getRelationships($resource, $isPrimary, array $includeRelationships)
    {
        return [
            'curriculums' => [
                self::SHOW_RELATED => true,
            ],
            'vacantes' => [
                self::SHOW_RELATED => true,
            ],
            'empresas' => [
                self::SHOW_RELATED => true,
            ],
        ];
    }
}
