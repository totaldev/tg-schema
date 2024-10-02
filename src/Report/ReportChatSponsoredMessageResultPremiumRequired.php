<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

/**
 * The user asked to hide sponsored messages, but Telegram Premium is required for this.
 */
class ReportChatSponsoredMessageResultPremiumRequired extends ReportChatSponsoredMessageResult
{
    public const TYPE_NAME = 'reportChatSponsoredMessageResultPremiumRequired';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ReportChatSponsoredMessageResultPremiumRequired
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
