<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

use Totaldev\TgSchema\TdObject;

/**
 * Describes result of sponsored message report.
 */
class ReportChatSponsoredMessageResult extends TdObject
{
    public const TYPE_NAME = 'ReportChatSponsoredMessageResult';

    public function __construct() {}

    public static function fromArray(array $array): ReportChatSponsoredMessageResult
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
