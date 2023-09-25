<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The message can be opened only once and will be self-destructed once closed
 */
class MessageSelfDestructTypeImmediately extends MessageSelfDestructType
{
    public const TYPE_NAME = 'messageSelfDestructTypeImmediately';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageSelfDestructTypeImmediately
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
