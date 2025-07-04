<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Emoji;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of emoji statuses.
 */
class EmojiStatuses extends TdObject
{
    public const TYPE_NAME = 'emojiStatuses';

    public function __construct(
        /**
         * The list of emoji statuses identifiers.
         *
         * @var EmojiStatus[]
         */
        protected array $emojiStatuses
    ) {}

    public static function fromArray(array $array): EmojiStatuses
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['emoji_statuses']),
        );
    }

    public function getEmojiStatuses(): array
    {
        return $this->emojiStatuses;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'emoji_statuses' => array_map(static fn($x) => $x->typeSerialize(), $this->emojiStatuses),
        ];
    }
}
