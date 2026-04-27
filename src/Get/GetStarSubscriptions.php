<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the list of Telegram Star subscriptions for the current user.
 */
class GetStarSubscriptions extends TdFunction
{
    public const string TYPE_NAME = 'getStarSubscriptions';

    public function __construct(
        /**
         * Offset of the first subscription to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string $offset,
        /**
         * Pass true to receive only expiring subscriptions for which there are no enough Telegram Stars to extend.
         */
        protected bool   $onlyExpiring,
    ) {}

    public static function fromArray(array $array): GetStarSubscriptions
    {
        return new static(
            offset      : $array['offset'],
            onlyExpiring: $array['only_expiring'],
        );
    }

    public function getOffset(): string
    {
        return $this->offset;
    }

    public function getOnlyExpiring(): bool
    {
        return $this->onlyExpiring;
    }

    public function setOffset(string $value): static
    {
        $this->offset = $value;

        return $this;
    }

    public function setOnlyExpiring(bool $value): static
    {
        $this->onlyExpiring = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'offset'        => $this->offset,
            'only_expiring' => $this->onlyExpiring,
        ];
    }
}
