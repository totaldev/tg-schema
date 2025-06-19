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
    public const TYPE_NAME = 'getStarSubscriptions';

    public function __construct(
        /**
         * Pass true to receive only expiring subscriptions for which there are no enough Telegram Stars to extend.
         */
        protected bool   $onlyExpiring,
        /**
         * Offset of the first subscription to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string $offset
    ) {}

    public static function fromArray(array $array): GetStarSubscriptions
    {
        return new static(
            $array['only_expiring'],
            $array['offset'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'only_expiring' => $this->onlyExpiring,
            'offset'        => $this->offset,
        ];
    }
}
