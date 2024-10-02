<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Emoji;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a custom emoji to be shown instead of the Telegram Premium badge.
 */
class EmojiStatus extends TdObject
{
    public const TYPE_NAME = 'emojiStatus';

    public function __construct(
        /**
         * Identifier of the custom emoji in stickerFormatTgs format.
         */
        protected int $customEmojiId,
        /**
         * Point in time (Unix timestamp) when the status will expire; 0 if never.
         */
        protected int $expirationDate,
    ) {}

    public static function fromArray(array $array): EmojiStatus
    {
        return new static(
            $array['custom_emoji_id'],
            $array['expiration_date'],
        );
    }

    public function getCustomEmojiId(): int
    {
        return $this->customEmojiId;
    }

    public function getExpirationDate(): int
    {
        return $this->expirationDate;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'custom_emoji_id' => $this->customEmojiId,
            'expiration_date' => $this->expirationDate,
        ];
    }
}
