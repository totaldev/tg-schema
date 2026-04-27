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
    public const string TYPE_NAME = 'pageBlockDetails';

    public function __construct(
        /**
         * Always visible heading for the block.
         */
        protected RichText $header,
        /**
         * True, if the block is open by default.
         */
        protected bool     $isOpen,
        /**
         * Block contents.
         *
         * @var PageBlock[]
         */
        protected array    $pageBlocks,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockDetails
    {
        return new static(
            header    : TdSchemaRegistry::fromArray($array['header']),
            isOpen    : $array['is_open'],
            pageBlocks: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['page_blocks']),
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

    public function setHeader(RichText $value): static
    {
        $this->header = $value;

        return $this;
    }

    public function setIsOpen(bool $value): static
    {
        $this->isOpen = $value;

        return $this;
    }

    public function setPageBlocks(array $value): static
    {
        $this->pageBlocks = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'header'      => $this->header->jsonSerialize(),
            'is_open'     => $this->isOpen,
            'page_blocks' => array_map(static fn($x) => $x->jsonSerialize(), $this->pageBlocks),
        ];
    }
}
