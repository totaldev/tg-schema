<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Secret;

/**
 * The secret chat is closed.
 */
class SecretChatStateClosed extends SecretChatState
{
    public const string TYPE_NAME = 'secretChatStateClosed';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SecretChatStateClosed
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
