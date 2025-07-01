<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A list of data blocks.
 */
class PageBlockList extends PageBlock
{
    public const TYPE_NAME = 'pageBlockList';

    public function __construct(
        /**
         * The items of the list.
         *
         * @var PageBlockListItem[]
         */
        protected array $items
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockList
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['items']),
        );
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'items' => array_map(static fn($x) => $x->typeSerialize(), $this->items),
        ];
    }
}
