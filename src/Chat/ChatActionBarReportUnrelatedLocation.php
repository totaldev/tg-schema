<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The chat is a location-based supergroup, which can be reported as having unrelated location using the method reportChat with the reason
 * reportReasonUnrelatedLocation.
 */
class ChatActionBarReportUnrelatedLocation extends ChatActionBar
{
    public const TYPE_NAME = 'chatActionBarReportUnrelatedLocation';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatActionBarReportUnrelatedLocation
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
