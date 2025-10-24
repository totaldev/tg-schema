<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Emoji\EmojiStatus;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the emoji status of a chat. Use chatBoostLevelFeatures.can_set_emoji_status to check whether an emoji status can be set. Requires can_change_info
 * administrator right.
 */
class SetChatEmojiStatus extends TdFunction
{
    public const string TYPE_NAME = 'setChatEmojiStatus';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int          $chatId,
        /**
         * New emoji status; pass null to remove emoji status.
         */
        protected ?EmojiStatus $emojiStatus = null,
    ) {}

    public static function fromArray(array $array): SetChatEmojiStatus
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

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setEmojiStatus(?EmojiStatus $value): static
    {
        $this->emojiStatus = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'chat_id'      => $this->chatId,
            'emoji_status' => $this->emojiStatus ?? null,
        ];
    }
}
