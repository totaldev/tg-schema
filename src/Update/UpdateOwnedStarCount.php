<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Star\StarAmount;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The number of Telegram Stars owned by the current user has changed.
 */
class UpdateOwnedStarCount extends Update
{
    public const TYPE_NAME = 'updateOwnedStarCount';

    public function __construct(
        /**
         * The new amount of owned Telegram Stars.
         */
        protected StarAmount $starAmount
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateOwnedStarCount
    {
        return new static(
            TdSchemaRegistry::fromArray($array['star_amount']),
        );
    }

    public function getStarAmount(): StarAmount
    {
        return $this->starAmount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'star_amount' => $this->starAmount->typeSerialize(),
        ];
    }
}
