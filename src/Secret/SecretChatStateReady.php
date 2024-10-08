<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Secret;

/**
 * The secret chat is ready to use.
 */
class SecretChatStateReady extends SecretChatState
{
    public const TYPE_NAME = 'secretChatStateReady';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SecretChatStateReady
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
