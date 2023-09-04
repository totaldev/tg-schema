<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a detailed statistics about a chat
 */
class ChatStatistics extends TdObject
{
    public const TYPE_NAME = 'ChatStatistics';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ChatStatistics
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
