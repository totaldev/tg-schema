<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Destroy;

use Totaldev\TgSchema\TdFunction;

/**
 * Closes the TDLib instance, destroying all local data without a proper logout. The current user session will remain in the list of all active sessions. All
 * local data will be destroyed. After the destruction completes updateAuthorizationState with authorizationStateClosed will be sent. Can be called before
 * authorization.
 */
class Destroy extends TdFunction
{
    public const TYPE_NAME = 'destroy';

    public function __construct() {}

    public static function fromArray(array $array): Destroy
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
