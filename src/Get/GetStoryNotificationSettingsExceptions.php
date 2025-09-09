<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the list of chats with non-default notification settings for stories.
 */
class GetStoryNotificationSettingsExceptions extends TdFunction
{
    public const TYPE_NAME = 'getStoryNotificationSettingsExceptions';

    public function __construct() {}

    public static function fromArray(array $array): GetStoryNotificationSettingsExceptions
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
