<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The user is picking a location or venue to send.
 */
class ChatActionChoosingLocation extends ChatAction
{
    public const TYPE_NAME = 'chatActionChoosingLocation';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatActionChoosingLocation
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
