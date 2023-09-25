<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\Rich\RichText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A collapsible block
 */
class PageBlockDetails extends PageBlock
{
    public const TYPE_NAME = 'pageBlockDetails';

    /**
     * Always visible heading for the block
     *
     * @var RichText
     */
    protected RichText $header;

    /**
     * True, if the block is open by default
     *
     * @var bool
     */
    protected bool $isOpen;

    /**
     * Block contents
     *
     * @var PageBlock[]
     */
    protected array $pageBlocks;

    public function __construct(RichText $header, array $pageBlocks, bool $isOpen)
    {
        parent::__construct();

        $this->header = $header;
        $this->pageBlocks = $pageBlocks;
        $this->isOpen = $isOpen;
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
            '@type' => static::TYPE_NAME,
            'header' => $this->header->typeSerialize(),
            array_map(fn($x) => $x->typeSerialize(), $this->pageBlocks),
            'is_open' => $this->isOpen,
        ];
    }
}
