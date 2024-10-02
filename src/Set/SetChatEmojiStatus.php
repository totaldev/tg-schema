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
    public const TYPE_NAME = 'setChatEmojiStatus';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int         $chatId,
        /**
         * New emoji status; pass null to remove emoji status.
         */
        protected EmojiStatus $emojiStatus,
    ) {}

    public static function fromArray(array $array): SetChatEmojiStatus
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['emoji_status']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getEmojiStatus(): EmojiStatus
    {
        return $this->emojiStatus;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'chat_id'      => $this->chatId,
            'emoji_status' => $this->emojiStatus->typeSerialize(),
        ];
    }
}
