<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A screenshot of a message in the chat has been taken
 */
class MessageScreenshotTaken extends MessageContent
{
    public const TYPE_NAME = 'messageScreenshotTaken';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageScreenshotTaken
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
