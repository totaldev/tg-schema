<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * A message was unpinned.
 */
class ChatEventMessageUnpinned extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventMessageUnpinned';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventMessageUnpinned
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
