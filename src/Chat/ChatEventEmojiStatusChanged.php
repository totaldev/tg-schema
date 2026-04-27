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
    public const string TYPE_NAME = 'chatEventEmojiStatusChanged';

    public function __construct(
        /**
         * New emoji status; may be null if none.
         */
        protected ?EmojiStatus $newEmojiStatus,
        /**
         * Previous emoji status; may be null if none.
         */
        protected ?EmojiStatus $oldEmojiStatus,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventEmojiStatusChanged
    {
        return new static(
            newEmojiStatus: (isset($array['new_emoji_status']) ? TdSchemaRegistry::fromArray($array['new_emoji_status']) : null),
            oldEmojiStatus: (isset($array['old_emoji_status']) ? TdSchemaRegistry::fromArray($array['old_emoji_status']) : null),
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

    public function setNewEmojiStatus(?EmojiStatus $value): static
    {
        $this->newEmojiStatus = $value;

        return $this;
    }

    public function setOldEmojiStatus(?EmojiStatus $value): static
    {
        $this->oldEmojiStatus = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'new_emoji_status' => (null !== $this->newEmojiStatus ? $this->newEmojiStatus->jsonSerialize() : null),
            'old_emoji_status' => (null !== $this->oldEmojiStatus ? $this->oldEmojiStatus->jsonSerialize() : null),
        ];
    }
}
