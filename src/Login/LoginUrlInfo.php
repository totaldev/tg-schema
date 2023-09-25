<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Login;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about an inline button of type inlineKeyboardButtonTypeLoginUrl
 */
class LoginUrlInfo extends TdObject
{
    public const TYPE_NAME = 'LoginUrlInfo';

    public function __construct()
    {
    }

    public static function fromArray(array $array): LoginUrlInfo
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
