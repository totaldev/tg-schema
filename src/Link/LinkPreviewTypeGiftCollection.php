<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to a gift collection.
 */
class LinkPreviewTypeGiftCollection extends LinkPreviewType
{
    public const TYPE_NAME = 'linkPreviewTypeGiftCollection';

    public function __construct(
        /**
         * Icons for some gifts from the collection; may be empty.
         *
         * @var Sticker[]
         */
        protected array $icons
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeGiftCollection
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['icons']),
        );
    }

    public function getIcons(): array
    {
        return $this->icons;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'icons' => array_map(static fn($x) => $x->typeSerialize(), $this->icons),
        ];
    }
}
