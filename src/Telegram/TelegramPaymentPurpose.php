<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Telegram;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a purpose of a payment toward Telegram.
 */
class TelegramPaymentPurpose extends TdObject
{
    public const TYPE_NAME = 'TelegramPaymentPurpose';

    public function __construct() {}

    public static function fromArray(array $array): TelegramPaymentPurpose
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
