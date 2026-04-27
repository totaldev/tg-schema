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
    public const string TYPE_NAME = 'pageBlockSlideshow';

    public function __construct(
        /**
         * Block caption.
         */
        protected PageBlockCaption $caption,
        /**
         * Slideshow item contents.
         *
         * @var PageBlock[]
         */
        protected array            $pageBlocks,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockSlideshow
    {
        return new static(
            caption   : TdSchemaRegistry::fromArray($array['caption']),
            pageBlocks: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['page_blocks']),
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

    public function setCaption(PageBlockCaption $value): static
    {
        $this->caption = $value;

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
            'caption'     => $this->caption->jsonSerialize(),
            'page_blocks' => array_map(static fn($x) => $x->jsonSerialize(), $this->pageBlocks),
        ];
    }
}
