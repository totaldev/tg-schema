<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

/**
 * The sponsored message is too old or not found.
 */
class ReportChatSponsoredMessageResultFailed extends ReportChatSponsoredMessageResult
{
    public const TYPE_NAME = 'reportChatSponsoredMessageResultFailed';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ReportChatSponsoredMessageResultFailed
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
