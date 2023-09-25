<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passport;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A Telegram Passport element containing the user's identity card
 */
class PassportElementTypeIdentityCard extends PassportElementType
{
    public const TYPE_NAME = 'passportElementTypeIdentityCard';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PassportElementTypeIdentityCard
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
