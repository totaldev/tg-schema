<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * The read date is unknown due to privacy settings of the current user, but will be known if the user subscribes to Telegram Premium.
 */
class MessageReadDateMyPrivacyRestricted extends MessageReadDate
{
    public const TYPE_NAME = 'messageReadDateMyPrivacyRestricted';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageReadDateMyPrivacyRestricted
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
