<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

/**
 * The link is a link to a text or a poll Telegram message.
 */
class LinkPreviewTypeMessage extends LinkPreviewType
{
    public const TYPE_NAME = 'linkPreviewTypeMessage';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeMessage
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
