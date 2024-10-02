<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

/**
 * Sponsored messages were hidden for the user in all chats.
 */
class ReportChatSponsoredMessageResultAdsHidden extends ReportChatSponsoredMessageResult
{
    public const TYPE_NAME = 'reportChatSponsoredMessageResultAdsHidden';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ReportChatSponsoredMessageResultAdsHidden
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
