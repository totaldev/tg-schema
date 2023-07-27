<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The message is from a forum topic history
 */
class MessageSourceForumTopicHistory extends MessageSource
{
    public const TYPE_NAME = 'messageSourceForumTopicHistory';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageSourceForumTopicHistory
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
