<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a boost applied to a chat.
 */
class ChatBoost extends TdObject
{
    public const string TYPE_NAME = 'chatBoost';

    public function __construct(
        /**
         * The number of identical boosts applied.
         */
        protected int             $count,
        /**
         * Point in time (Unix timestamp) when the boost will expire.
         */
        protected int             $expirationDate,
        /**
         * Unique identifier of the boost.
         */
        protected string          $id,
        /**
         * Source of the boost.
         */
        protected ChatBoostSource $source,
        /**
         * Point in time (Unix timestamp) when the chat was boosted.
         */
        protected int             $startDate,
    ) {}

    public static function fromArray(array $array): ChatBoost
    {
        return new static(
            count         : $array['count'],
            expirationDate: $array['expiration_date'],
            id            : $array['id'],
            source        : TdSchemaRegistry::fromArray($array['source']),
            startDate     : $array['start_date'],
        );
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function getExpirationDate(): int
    {
        return $this->expirationDate;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getSource(): ChatBoostSource
    {
        return $this->source;
    }

    public function getStartDate(): int
    {
        return $this->startDate;
    }

    public function setCount(int $value): static
    {
        $this->count = $value;

        return $this;
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

    public function setSource(ChatBoostSource $value): static
    {
        $this->source = $value;

        return $this;
    }

    public function setStartDate(int $value): static
    {
        $this->startDate = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'count'           => $this->count,
            'expiration_date' => $this->expirationDate,
            'id'              => $this->id,
            'source'          => $this->source->jsonSerialize(),
            'start_date'      => $this->startDate,
        ];
    }
}
