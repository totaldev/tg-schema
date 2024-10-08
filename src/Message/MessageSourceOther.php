<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * The message is from some other source.
 */
class MessageSourceOther extends MessageSource
{
    public const TYPE_NAME = 'messageSourceOther';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageSourceOther
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
