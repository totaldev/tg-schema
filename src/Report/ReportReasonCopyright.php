<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

/**
 * The chat contains copyrighted content.
 */
class ReportReasonCopyright extends ReportReason
{
    public const TYPE_NAME = 'reportReasonCopyright';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ReportReasonCopyright
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
