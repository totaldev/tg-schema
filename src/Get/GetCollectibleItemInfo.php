<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Collectible\CollectibleItemType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns information about a given collectible item that was purchased at https://fragment.com.
 */
class GetCollectibleItemInfo extends TdFunction
{
    public const TYPE_NAME = 'getCollectibleItemInfo';

    public function __construct(
        /**
         * Type of the collectible item. The item must be used by a user and must be visible to the current user.
         */
        protected CollectibleItemType $type
    ) {}

    public static function fromArray(array $array): GetCollectibleItemInfo
    {
        return new static(
            TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function getType(): CollectibleItemType
    {
        return $this->type;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'type'  => $this->type->typeSerialize(),
        ];
    }
}
