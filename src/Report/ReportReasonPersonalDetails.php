<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Report;

/**
 * The chat contains messages with personal details
 */
class ReportReasonPersonalDetails extends ReportReason
{
    public const TYPE_NAME = 'reportReasonPersonalDetails';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ReportReasonPersonalDetails
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
