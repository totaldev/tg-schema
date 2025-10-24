<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Prepared;

use Totaldev\TgSchema\TdObject;

/**
 * Represents an inline message that can be sent via the bot.
 */
class PreparedInlineMessageId extends TdObject
{
    public const string TYPE_NAME = 'preparedInlineMessageId';

    public function __construct(
        /**
         * Unique identifier for the message.
         */
        protected string $id,
        /**
         * Point in time (Unix timestamp) when the message can't be used anymore.
         */
        protected int    $expirationDate,
    ) {}

    public static function fromArray(array $array): PreparedInlineMessageId
    {
        return new static(
            $array['id'],
            $array['expiration_date'],
        );
    }

    public function getExpirationDate(): int
    {
        return $this->expirationDate;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setExpirationDate(int $value): static
    {
        $this->expirationDate = $value;

        return $this;
    }

    public function setId(string $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'id'              => $this->id,
            'expiration_date' => $this->expirationDate,
        ];
    }
}
