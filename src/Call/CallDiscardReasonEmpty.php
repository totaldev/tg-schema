<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Call;

/**
 * The call wasn't discarded, or the reason is unknown.
 */
class CallDiscardReasonEmpty extends CallDiscardReason
{
    public const TYPE_NAME = 'callDiscardReasonEmpty';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CallDiscardReasonEmpty
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
