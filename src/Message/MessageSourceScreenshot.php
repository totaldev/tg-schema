<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The message was screenshotted; the source must be used only if the message content was visible during the screenshot
 */
class MessageSourceScreenshot extends MessageSource
{
    public const TYPE_NAME = 'messageSourceScreenshot';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageSourceScreenshot
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
