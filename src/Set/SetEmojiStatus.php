<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Emoji\EmojiStatus;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the emoji status of the current user; for Telegram Premium users only.
 */
class SetEmojiStatus extends TdFunction
{
    public const TYPE_NAME = 'setEmojiStatus';

    public function __construct(
        /**
         * New emoji status; pass null to switch to the default badge.
         */
        protected ?EmojiStatus $emojiStatus = null
    ) {}

    public static function fromArray(array $array): SetEmojiStatus
    {
        return new static(
            TdSchemaRegistry::fromArray($array['emoji_status']),
        );
    }

    public function getEmojiStatus(): EmojiStatus
    {
        return $this->emojiStatus;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'emoji_status' => $this->emojiStatus->typeSerialize(),
        ];
    }
}
