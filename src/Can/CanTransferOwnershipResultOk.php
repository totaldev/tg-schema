<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

/**
 * The session can be used.
 */
class CanTransferOwnershipResultOk extends CanTransferOwnershipResult
{
    public const TYPE_NAME = 'canTransferOwnershipResultOk';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CanTransferOwnershipResultOk
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
