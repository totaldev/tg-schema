<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Business;

use Totaldev\TgSchema\TdObject;

/**
 * Describes conditions for sending of away messages by a Telegram Business account.
 */
class BusinessAwayMessageSchedule extends TdObject
{
    public const TYPE_NAME = 'BusinessAwayMessageSchedule';

    public function __construct() {}

    public static function fromArray(array $array): BusinessAwayMessageSchedule
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
