<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns privacy settings for new chat creation.
 */
class GetNewChatPrivacySettings extends TdFunction
{
    public const TYPE_NAME = 'getNewChatPrivacySettings';

    public function __construct() {}

    public static function fromArray(array $array): GetNewChatPrivacySettings
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
