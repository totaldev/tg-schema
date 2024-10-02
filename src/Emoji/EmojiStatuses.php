<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Emoji;

use Totaldev\TgSchema\TdObject;

/**
 * Contains a list of custom emoji identifiers for emoji statuses.
 */
class EmojiStatuses extends TdObject
{
    public const TYPE_NAME = 'emojiStatuses';

    public function __construct(
        /**
         * The list of custom emoji identifiers.
         *
         * @var int[]
         */
        protected array $customEmojiIds
    ) {}

    public static function fromArray(array $array): EmojiStatuses
    {
        return new static(
            $array['custom_emoji_ids'],
        );
    }

    public function getCustomEmojiIds(): array
    {
        return $this->customEmojiIds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'custom_emoji_ids' => $this->customEmojiIds,
        ];
    }
}
