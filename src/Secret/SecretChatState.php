<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Secret;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes the current secret chat state
 */
class SecretChatState extends TdObject
{
    public const TYPE_NAME = 'SecretChatState';

    public function __construct()
    {
    }

    public static function fromArray(array $array): SecretChatState
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
