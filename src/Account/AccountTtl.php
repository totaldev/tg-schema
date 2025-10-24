<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Account;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about the period of inactivity after which the current user's account will automatically be deleted.
 */
class AccountTtl extends TdObject
{
    public const string TYPE_NAME = 'accountTtl';

    public function __construct(
        /**
         * Number of days of inactivity before the account will be flagged for deletion; 30-730 days.
         */
        protected int $days
    ) {}

    public static function fromArray(array $array): AccountTtl
    {
        return new static(
            $array['days'],
        );
    }

    public function getDays(): int
    {
        return $this->days;
    }

    public function setDays(int $value): static
    {
        $this->days = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'days'  => $this->days,
        ];
    }
}
