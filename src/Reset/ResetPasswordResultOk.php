<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reset;

/**
 * The password was reset.
 */
class ResetPasswordResultOk extends ResetPasswordResult
{
    public const TYPE_NAME = 'resetPasswordResultOk';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ResetPasswordResultOk
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
