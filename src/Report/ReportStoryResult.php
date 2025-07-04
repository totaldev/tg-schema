<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

use Totaldev\TgSchema\TdObject;

/**
 * Describes result of story report.
 */
class ReportStoryResult extends TdObject
{
    public const TYPE_NAME = 'ReportStoryResult';

    public function __construct() {}

    public static function fromArray(array $array): ReportStoryResult
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
