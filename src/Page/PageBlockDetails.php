<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\Rich\RichText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A collapsible block.
 */
class PageBlockDetails extends PageBlock
{
    public const TYPE_NAME = 'pageBlockDetails';

    public function __construct(
        /**
         * Always visible heading for the block.
         */
        protected RichText $header,
        /**
         * Block contents.
         *
         * @var PageBlock[]
         */
        protected array    $pageBlocks,
        /**
         * True, if the block is open by default.
         */
        protected bool     $isOpen,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockDetails
    {
        return new static(
            TdSchemaRegistry::fromArray($array['header']),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['page_blocks']),
            $array['is_open'],
        );
    }

    public function getHeader(): RichText
    {
        return $this->header;
    }

    public function getIsOpen(): bool
    {
        return $this->isOpen;
    }

    public function getPageBlocks(): array
    {
        return $this->pageBlocks;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'header'  => $this->header->typeSerialize(),
            array_map(fn($x) => $x->typeSerialize(), $this->pageBlocks),
            'is_open' => $this->isOpen,
        ];
    }
}
