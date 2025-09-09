<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

/**
 * The sponsored message is too old or not found.
 */
class ReportSponsoredResultFailed extends ReportSponsoredResult
{
    public const TYPE_NAME = 'reportSponsoredResultFailed';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ReportSponsoredResultFailed
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
