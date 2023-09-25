<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reaction;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A reaction with a custom emoji
 */
class ReactionTypeCustomEmoji extends ReactionType
{
    public const TYPE_NAME = 'reactionTypeCustomEmoji';

    /**
     * Unique identifier of the custom emoji
     *
     * @var int
     */
    protected int $customEmojiId;

    public function __construct(int $customEmojiId)
    {
        parent::__construct();

        $this->customEmojiId = $customEmojiId;
    }

    public static function fromArray(array $array): ReactionTypeCustomEmoji
    {
        return new static(
            $array['custom_emoji_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'custom_emoji_id' => $this->customEmojiId,
        ];
    }

    public function getCustomEmojiId(): int
    {
        return $this->customEmojiId;
    }
}
