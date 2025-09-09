<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

use Totaldev\TgSchema\TdObject;

/**
 * Describes result of chat report.
 */
class ReportChatResult extends TdObject
{
    public const TYPE_NAME = 'ReportChatResult';

    public function __construct() {}

    public static function fromArray(array $array): ReportChatResult
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
