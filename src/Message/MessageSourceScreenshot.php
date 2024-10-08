<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * The message was screenshotted; the source must be used only if the message content was visible during the screenshot.
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
