<?php

namespace App\JsonApi\Areas;

use Neomerx\JsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{

    /**
     * @var string
     */
    protected $resourceType = 'areas';

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
            
        ];
    }
    public function getRelationships($resource, $isPrimary, array $includeRelationships)
    {
        return [
            'vacantes' => [
                self::SHOW_RELATED => true,
            ]
        ];
    }
}
