<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns privacy settings for message read date.
 */
class GetReadDatePrivacySettings extends TdFunction
{
    public const TYPE_NAME = 'getReadDatePrivacySettings';

    public function __construct() {}

    public static function fromArray(array $array): GetReadDatePrivacySettings
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
