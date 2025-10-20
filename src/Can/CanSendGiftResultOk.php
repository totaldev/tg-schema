<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

/**
 * The gift can be sent now by the current user.
 */
class CanSendGiftResultOk extends CanSendGiftResult
{
    public const TYPE_NAME = 'canSendGiftResultOk';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CanSendGiftResultOk
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
