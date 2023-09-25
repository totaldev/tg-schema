<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The chat has illegal drugs related content
 */
class ReportReasonIllegalDrugs extends ReportReason
{
    public const TYPE_NAME = 'reportReasonIllegalDrugs';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ReportReasonIllegalDrugs
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
