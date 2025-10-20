<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Call;

/**
 * The call has been answered and encryption keys are being exchanged.
 */
class CallStateExchangingKeys extends CallState
{
    public const TYPE_NAME = 'callStateExchangingKeys';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CallStateExchangingKeys
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
