<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes an item of a list page block.
 */
class PageBlockListItem extends TdObject
{
    public const TYPE_NAME = 'pageBlockListItem';

    public function __construct(
        /**
         * Item label.
         */
        protected string $label,
        /**
         * Item blocks.
         *
         * @var PageBlock[]
         */
        protected array  $pageBlocks,
    ) {}

    public static function fromArray(array $array): PageBlockListItem
    {
        return new static(
            $array['label'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['page_blocks']),
        );
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getPageBlocks(): array
    {
        return $this->pageBlocks;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'label' => $this->label,
            array_map(fn($x) => $x->typeSerialize(), $this->pageBlocks),
        ];
    }
}
