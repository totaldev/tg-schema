<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Secret;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The secret chat is closed
 */
class SecretChatStateClosed extends SecretChatState
{
    public const TYPE_NAME = 'secretChatStateClosed';

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