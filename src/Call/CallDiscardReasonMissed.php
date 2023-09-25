<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Call;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The call was ended before the conversation started. It was canceled by the caller or missed by the other party
 */
class CallDiscardReasonMissed extends CallDiscardReason
{
    public const TYPE_NAME = 'callDiscardReasonMissed';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CallDiscardReasonMissed
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
