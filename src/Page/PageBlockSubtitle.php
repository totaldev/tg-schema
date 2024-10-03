<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\Rich\RichText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The subtitle of a page.
 */
class PageBlockSubtitle extends PageBlock
{
    public const TYPE_NAME = 'pageBlockSubtitle';

    public function __construct(
        /**
         * Subtitle.
         */
        protected RichText $subtitle
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockSubtitle
    {
        return new static(
            TdSchemaRegistry::fromArray($array['subtitle']),
        );
    }

    public function getSubtitle(): RichText
    {
        return $this->subtitle;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'subtitle' => $this->subtitle->typeSerialize(),
        ];
    }
}
