<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Report;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The chat has child abuse related content
 */
class ReportReasonChildAbuse extends ReportReason
{
    public const TYPE_NAME = 'reportReasonChildAbuse';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ReportReasonChildAbuse
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
