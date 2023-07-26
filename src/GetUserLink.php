<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Returns an HTTPS link, which can be used to get information about the current user
 */
class GetUserLink extends TdFunction
{
    public const TYPE_NAME = 'getUserLink';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetUserLink
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
