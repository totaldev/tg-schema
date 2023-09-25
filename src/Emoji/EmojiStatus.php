<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Emoji;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a custom emoji to be shown instead of the Telegram Premium badge
 */
class EmojiStatus extends TdObject
{
    public const TYPE_NAME = 'emojiStatus';

    /**
     * Identifier of the custom emoji in stickerFormatTgs format
     *
     * @var int
     */
    protected int $customEmojiId;

    /**
     * Point in time (Unix timestamp) when the status will expire; 0 if never
     *
     * @var int
     */
    protected int $expirationDate;

    public function __construct(int $customEmojiId, int $expirationDate)
    {
        $this->customEmojiId = $customEmojiId;
        $this->expirationDate = $expirationDate;
    }

    public static function fromArray(array $array): EmojiStatus
    {
        return new static(
            $array['custom_emoji_id'],
            $array['expiration_date'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'custom_emoji_id' => $this->customEmojiId,
            'expiration_date' => $this->expirationDate,
        ];
    }

    public function getCustomEmojiId(): int
    {
        return $this->customEmojiId;
    }

    public function getExpirationDate(): int
    {
        return $this->expirationDate;
    }
}
