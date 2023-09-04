<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Notification;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains detailed information about a notification
 */
class NotificationType extends TdObject
{
    public const TYPE_NAME = 'NotificationType';

    public function __construct()
    {
    }

    public static function fromArray(array $array): NotificationType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
