<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Emoji;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes an emoji to be shown instead of the Telegram Premium badge.
 */
class EmojiStatus extends TdObject
{
    public const TYPE_NAME = 'emojiStatus';

    public function __construct(
        /**
         * Type of the emoji status.
         */
        protected EmojiStatusType $type,
        /**
         * Point in time (Unix timestamp) when the status will expire; 0 if never.
         */
        protected int             $expirationDate
    ) {}

    public static function fromArray(array $array): EmojiStatus
    {
        return new static(
            TdSchemaRegistry::fromArray($array['type']),
            $array['expiration_date'],
        );
    }

    public function getExpirationDate(): int
    {
        return $this->expirationDate;
    }

    public function getType(): EmojiStatusType
    {
        return $this->type;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'type'            => $this->type->typeSerialize(),
            'expiration_date' => $this->expirationDate,
        ];
    }
}
