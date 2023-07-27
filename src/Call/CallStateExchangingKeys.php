<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Call;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The call has been answered and encryption keys are being exchanged
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
