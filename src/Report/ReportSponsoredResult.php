<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

use Totaldev\TgSchema\TdObject;

/**
 * Describes result of sponsored message or chat report.
 */
class ReportSponsoredResult extends TdObject
{
    public const TYPE_NAME = 'ReportSponsoredResult';

    public function __construct() {}

    public static function fromArray(array $array): ReportSponsoredResult
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
