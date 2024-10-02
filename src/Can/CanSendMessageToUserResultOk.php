<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

/**
 * The user can be messaged.
 */
class CanSendMessageToUserResultOk extends CanSendMessageToUserResult
{
    public const TYPE_NAME = 'canSendMessageToUserResultOk';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CanSendMessageToUserResultOk
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
