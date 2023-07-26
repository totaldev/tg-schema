<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Describes the reason why a chat is reported
 */
class ReportReason extends TdObject
{
    public const TYPE_NAME = 'ReportReason';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ReportReason
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
