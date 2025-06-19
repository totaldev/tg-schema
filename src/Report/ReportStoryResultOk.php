<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

/**
 * The story was reported successfully.
 */
class ReportStoryResultOk extends ReportStoryResult
{
    public const TYPE_NAME = 'reportStoryResultOk';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ReportStoryResultOk
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
