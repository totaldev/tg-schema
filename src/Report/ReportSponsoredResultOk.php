<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

/**
 * The message was reported successfully.
 */
class ReportSponsoredResultOk extends ReportSponsoredResult
{
    public const TYPE_NAME = 'reportSponsoredResultOk';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ReportSponsoredResultOk
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
