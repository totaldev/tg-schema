<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Craft;

/**
 * Crafting isn't possible because one of the gifts can't be used for crafting yet.
 */
class CraftGiftResultTooEarly extends CraftGiftResult
{
    public const string TYPE_NAME = 'craftGiftResultTooEarly';

    public function __construct(
        /**
         * Time left before the gift can be used for crafting.
         */
        protected int $retryAfter
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): CraftGiftResultTooEarly
    {
        return new static(
            retryAfter: $array['retry_after'],
        );
    }

    public function getRetryAfter(): int
    {
        return $this->retryAfter;
    }

    public function setRetryAfter(int $value): static
    {
        $this->retryAfter = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'retry_after' => $this->retryAfter,
        ];
    }
}
