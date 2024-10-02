<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A slideshow.
 */
class PageBlockSlideshow extends PageBlock
{
    public const TYPE_NAME = 'pageBlockSlideshow';

    public function __construct(
        /**
         * Slideshow item contents.
         *
         * @var PageBlock[]
         */
        protected array            $pageBlocks,
        /**
         * Block caption.
         */
        protected PageBlockCaption $caption,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockSlideshow
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
            '@type'   => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->pageBlocks),
            'caption' => $this->caption->typeSerialize(),
        ];
    }
}
