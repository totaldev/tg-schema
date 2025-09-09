<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

/**
 * Sponsored messages were hidden for the user in all chats.
 */
class ReportSponsoredResultAdsHidden extends ReportSponsoredResult
{
    public const TYPE_NAME = 'reportSponsoredResultAdsHidden';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ReportSponsoredResultAdsHidden
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
