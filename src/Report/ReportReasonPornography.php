<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Report;

/**
 * The chat contains pornographic messages
 */
class ReportReasonPornography extends ReportReason
{
    public const TYPE_NAME = 'reportReasonPornography';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ReportReasonPornography
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
