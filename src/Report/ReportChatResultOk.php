<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

/**
 * The chat was reported successfully.
 */
class ReportChatResultOk extends ReportChatResult
{
    public const TYPE_NAME = 'reportChatResultOk';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ReportChatResultOk
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
