<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Request;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Requests to send a 2-step verification password recovery code to an email address that was previously set up
 */
class RequestPasswordRecovery extends TdFunction
{
    public const TYPE_NAME = 'requestPasswordRecovery';

    public function __construct()
    {
    }

    public static function fromArray(array $array): RequestPasswordRecovery
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
