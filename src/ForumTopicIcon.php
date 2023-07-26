<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Describes a forum topic icon
 */
class ForumTopicIcon extends TdObject
{
    public const TYPE_NAME = 'forumTopicIcon';

    /**
     * Color of the topic icon in RGB format
     *
     * @var int
     */
    protected int $color;

    /**
     * Unique identifier of the custom emoji shown on the topic icon; 0 if none
     *
     * @var int
     */
    protected int $customEmojiId;

    public function __construct(int $color, int $customEmojiId)
    {
        $this->color = $color;
        $this->customEmojiId = $customEmojiId;
    }

    public static function fromArray(array $array): ForumTopicIcon
    {
        return new static(
            $array['color'],
            $array['custom_emoji_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'color' => $this->color,
            'custom_emoji_id' => $this->customEmojiId,
        ];
    }

    public function getColor(): int
    {
        return $this->color;
    }

    public function getCustomEmojiId(): int
    {
        return $this->customEmojiId;
    }
}
