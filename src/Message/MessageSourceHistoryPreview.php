<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Message;

/**
 * The message is from chat, message thread or forum topic history preview
 */
class MessageSourceHistoryPreview extends MessageSource
{
    public const TYPE_NAME = 'messageSourceHistoryPreview';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageSourceHistoryPreview
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
