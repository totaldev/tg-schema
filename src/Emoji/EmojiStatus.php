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
    public const string TYPE_NAME = 'emojiStatus';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the status will expire; 0 if never.
         */
        protected int             $expirationDate,
        /**
         * Type of the emoji status.
         */
        protected EmojiStatusType $type,
    ) {}

    public static function fromArray(array $array): EmojiStatus
    {
        return new static(
            expirationDate: $array['expiration_date'],
            type          : TdSchemaRegistry::fromArray($array['type']),
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

    public function setExpirationDate(int $value): static
    {
        $this->expirationDate = $value;

        return $this;
    }

    public function setType(EmojiStatusType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'expiration_date' => $this->expirationDate,
            'type'            => $this->type->jsonSerialize(),
        ];
    }
}
