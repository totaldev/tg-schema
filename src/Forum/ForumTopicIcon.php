<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Forum;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a forum topic icon.
 */
class ForumTopicIcon extends TdObject
{
    public const TYPE_NAME = 'forumTopicIcon';

    public function __construct(
        /**
         * Color of the topic icon in RGB format.
         */
        protected int $color,
        /**
         * Unique identifier of the custom emoji shown on the topic icon; 0 if none.
         */
        protected int $customEmojiId
    ) {}

    public static function fromArray(array $array): ForumTopicIcon
    {
        return new static(
            $array['color'],
            $array['custom_emoji_id'],
        );
    }

    public function getColor(): int
    {
        return $this->color;
    }

    public function getCustomEmojiId(): int
    {
        return $this->customEmojiId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'color'           => $this->color,
            'custom_emoji_id' => $this->customEmojiId,
        ];
    }
}
