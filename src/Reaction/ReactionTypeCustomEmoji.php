<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reaction;

/**
 * A reaction with a custom emoji.
 */
class ReactionTypeCustomEmoji extends ReactionType
{
    public const TYPE_NAME = 'reactionTypeCustomEmoji';

    public function __construct(
        /**
         * Unique identifier of the custom emoji.
         */
        protected int $customEmojiId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ReactionTypeCustomEmoji
    {
        return new static(
            $array['custom_emoji_id'],
        );
    }

    public function getCustomEmojiId(): int
    {
        return $this->customEmojiId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'custom_emoji_id' => $this->customEmojiId,
        ];
    }
}
