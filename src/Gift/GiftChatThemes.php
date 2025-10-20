<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Gift;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of chat themes based on upgraded gifts.
 */
class GiftChatThemes extends TdObject
{
    public const TYPE_NAME = 'giftChatThemes';

    public function __construct(
        /**
         * A list of chat themes.
         *
         * @var GiftChatTheme[]
         */
        protected array  $themes,
        /**
         * The offset for the next request. If empty, then there are no more results.
         */
        protected string $nextOffset,
    ) {}

    public static function fromArray(array $array): GiftChatThemes
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['themes']),
            $array['next_offset'],
        );
    }

    public function getNextOffset(): string
    {
        return $this->nextOffset;
    }

    public function getThemes(): array
    {
        return $this->themes;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'themes'      => array_map(static fn($x) => $x->typeSerialize(), $this->themes),
            'next_offset' => $this->nextOffset,
        ];
    }
}
