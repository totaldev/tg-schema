<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * The number of Toncoins owned by the current user has changed.
 */
class UpdateOwnedTonCount extends Update
{
    public const TYPE_NAME = 'updateOwnedTonCount';

    public function __construct(
        /**
         * The new amount of owned Toncoins; in the smallest units of the cryptocurrency.
         */
        protected int $tonAmount
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateOwnedTonCount
    {
        return new static(
            $array['ton_amount'],
        );
    }

    public function getTonAmount(): int
    {
        return $this->tonAmount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'ton_amount' => $this->tonAmount,
        ];
    }
}
