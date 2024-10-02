<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Emoji\EmojiStatus;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Chat emoji status has changed.
 */
class UpdateChatEmojiStatus extends Update
{
    public const TYPE_NAME = 'updateChatEmojiStatus';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int          $chatId,
        /**
         * The new chat emoji status; may be null.
         */
        protected ?EmojiStatus $emojiStatus,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatEmojiStatus
    {
        return new static(
            $array['chat_id'],
            isset($array['emoji_status']) ? TdSchemaRegistry::fromArray($array['emoji_status']) : null,
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getEmojiStatus(): ?EmojiStatus
    {
        return $this->emojiStatus;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'chat_id'      => $this->chatId,
            'emoji_status' => (isset($this->emojiStatus) ? $this->emojiStatus : null),
        ];
    }
}
