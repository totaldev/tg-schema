<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Report;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The chat represents a fake account
 */
class ReportReasonFake extends ReportReason
{
    public const TYPE_NAME = 'reportReasonFake';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ReportReasonFake
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
