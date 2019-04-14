<?php

namespace App\JsonApi\Empresas;

use Neomerx\JsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{

    /**
     * @var string
     */
    protected $resourceType = 'empresas';

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
            'web_page' => $resource->web_page,
            'description' => $resource->description,
        ];
    }
    public function getRelationships($resource, $isPrimary, array $includeRelationships)
    {
        return [
            'usuarios' => [
                self::SHOW_RELATED => true,
            ],
            'vacantes' => [
                self::SHOW_RELATED => true,
            ]
        ];
    }

}
