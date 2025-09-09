<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

/**
 * The user must choose messages to report and repeat the reportChat request with the chosen messages.
 */
class ReportChatResultMessagesRequired extends ReportChatResult
{
    public const TYPE_NAME = 'reportChatResultMessagesRequired';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ReportChatResultMessagesRequired
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
