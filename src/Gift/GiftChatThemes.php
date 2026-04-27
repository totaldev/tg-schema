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
    public const string TYPE_NAME = 'giftChatThemes';

    public function __construct(
        /**
         * The offset for the next request. If empty, then there are no more results.
         */
        protected string $nextOffset,
        /**
         * A list of chat themes.
         *
         * @var GiftChatTheme[]
         */
        protected array  $themes,
    ) {}

    public static function fromArray(array $array): GiftChatThemes
    {
        return new static(
            nextOffset: $array['next_offset'],
            themes    : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['themes']),
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

    public function setNextOffset(string $value): static
    {
        $this->nextOffset = $value;

        return $this;
    }

    public function setThemes(array $value): static
    {
        $this->themes = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'next_offset' => $this->nextOffset,
            'themes'      => array_map(static fn($x) => $x->jsonSerialize(), $this->themes),
        ];
    }
}
