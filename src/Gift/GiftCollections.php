<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Gift;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of gift collections.
 */
class GiftCollections extends TdObject
{
    public const TYPE_NAME = 'giftCollections';

    public function __construct(
        /**
         * List of gift collections.
         *
         * @var GiftCollection[]
         */
        protected array $collections
    ) {}

    public static function fromArray(array $array): GiftCollections
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['collections']),
        );
    }

    public function getCollections(): array
    {
        return $this->collections;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'collections' => array_map(static fn($x) => $x->typeSerialize(), $this->collections),
        ];
    }
}
