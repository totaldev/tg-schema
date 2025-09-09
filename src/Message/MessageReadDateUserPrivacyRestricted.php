<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * The read date is unknown due to privacy settings of the other user.
 */
class MessageReadDateUserPrivacyRestricted extends MessageReadDate
{
    public const TYPE_NAME = 'messageReadDateUserPrivacyRestricted';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageReadDateUserPrivacyRestricted
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
