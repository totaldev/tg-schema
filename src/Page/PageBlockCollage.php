<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A collage
 */
class PageBlockCollage extends PageBlock
{
    public const TYPE_NAME = 'pageBlockCollage';

    /**
     * Block caption
     *
     * @var PageBlockCaption
     */
    protected PageBlockCaption $caption;

    /**
     * Collage item contents
     *
     * @var PageBlock[]
     */
    protected array $pageBlocks;

    public function __construct(array $pageBlocks, PageBlockCaption $caption)
    {
        parent::__construct();

        $this->pageBlocks = $pageBlocks;
        $this->caption = $caption;
    }

    public static function fromArray(array $array): PageBlockCollage
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['page_blocks']),
            TdSchemaRegistry::fromArray($array['caption']),
        );
    }

    public function getCaption(): PageBlockCaption
    {
        return $this->caption;
    }

    public function getPageBlocks(): array
    {
        return $this->pageBlocks;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->pageBlocks),
            'caption' => $this->caption->typeSerialize(),
        ];
    }
}
