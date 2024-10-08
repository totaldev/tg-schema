<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Secret;

/**
 * The secret chat is not yet created; waiting for the other user to get online.
 */
class SecretChatStatePending extends SecretChatState
{
    public const TYPE_NAME = 'secretChatStatePending';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SecretChatStatePending
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
