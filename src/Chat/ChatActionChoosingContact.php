<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The user is picking a contact to send.
 */
class ChatActionChoosingContact extends ChatAction
{
    public const TYPE_NAME = 'chatActionChoosingContact';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatActionChoosingContact
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
