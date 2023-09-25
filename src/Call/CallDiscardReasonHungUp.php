<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Call;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The call was ended because one of the parties hung up
 */
class CallDiscardReasonHungUp extends CallDiscardReason
{
    public const TYPE_NAME = 'callDiscardReasonHungUp';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CallDiscardReasonHungUp
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
