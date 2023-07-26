<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * The chat promotes violence
 */
class ReportReasonViolence extends ReportReason
{
    public const TYPE_NAME = 'reportReasonViolence';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ReportReasonViolence
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
