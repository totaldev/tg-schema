<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Emoji\EmojiStatus;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The chat emoji status was changed.
 */
class ChatEventEmojiStatusChanged extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventEmojiStatusChanged';

    public function __construct(
        /**
         * Previous emoji status; may be null if none.
         */
        protected ?EmojiStatus $oldEmojiStatus,
        /**
         * New emoji status; may be null if none.
         */
        protected ?EmojiStatus $newEmojiStatus
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventEmojiStatusChanged
    {
        return new static(
            isset($array['old_emoji_status']) ? TdSchemaRegistry::fromArray($array['old_emoji_status']) : null,
            isset($array['new_emoji_status']) ? TdSchemaRegistry::fromArray($array['new_emoji_status']) : null,
        );
    }

    public function getNewEmojiStatus(): ?EmojiStatus
    {
        return $this->newEmojiStatus;
    }

    public function getOldEmojiStatus(): ?EmojiStatus
    {
        return $this->oldEmojiStatus;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'old_emoji_status' => $this->oldEmojiStatus ?? null,
            'new_emoji_status' => $this->newEmojiStatus ?? null,
        ];
    }
}
