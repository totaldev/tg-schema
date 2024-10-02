<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

/**
 * The message was reported successfully.
 */
class ReportChatSponsoredMessageResultOk extends ReportChatSponsoredMessageResult
{
    public const TYPE_NAME = 'reportChatSponsoredMessageResultOk';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ReportChatSponsoredMessageResultOk
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
