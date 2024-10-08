<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

/**
 * The chat contains spam messages.
 */
class ReportReasonSpam extends ReportReason
{
    public const TYPE_NAME = 'reportReasonSpam';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ReportReasonSpam
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
