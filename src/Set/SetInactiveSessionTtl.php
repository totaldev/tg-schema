<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the period of inactivity after which sessions will automatically be terminated.
 */
class SetInactiveSessionTtl extends TdFunction
{
    public const TYPE_NAME = 'setInactiveSessionTtl';

    public function __construct(
        /**
         * New number of days of inactivity before sessions will be automatically terminated; 1-366 days.
         */
        protected int $inactiveSessionTtlDays
    ) {}

    public static function fromArray(array $array): SetInactiveSessionTtl
    {
        return new static(
            $array['inactive_session_ttl_days'],
        );
    }

    public function getInactiveSessionTtlDays(): int
    {
        return $this->inactiveSessionTtlDays;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                     => static::TYPE_NAME,
            'inactive_session_ttl_days' => $this->inactiveSessionTtlDays,
        ];
    }
}
