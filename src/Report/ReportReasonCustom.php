<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A custom reason provided by the user
 */
class ReportReasonCustom extends ReportReason
{
    public const TYPE_NAME = 'reportReasonCustom';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ReportReasonCustom
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
