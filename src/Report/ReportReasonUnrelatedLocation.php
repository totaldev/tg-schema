<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The location-based chat is unrelated to its stated location
 */
class ReportReasonUnrelatedLocation extends ReportReason
{
    public const TYPE_NAME = 'reportReasonUnrelatedLocation';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ReportReasonUnrelatedLocation
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
