<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Reset;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents result of 2-step verification password reset
 */
class ResetPasswordResult extends TdObject
{
    public const TYPE_NAME = 'ResetPasswordResult';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ResetPasswordResult
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
