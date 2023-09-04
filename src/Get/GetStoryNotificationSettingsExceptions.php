<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns list of chats with non-default notification settings for stories
 */
class GetStoryNotificationSettingsExceptions extends TdFunction
{
    public const TYPE_NAME = 'getStoryNotificationSettingsExceptions';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetStoryNotificationSettingsExceptions
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
