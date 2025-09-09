<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns all website where the current user used Telegram to log in.
 */
class GetConnectedWebsites extends TdFunction
{
    public const TYPE_NAME = 'getConnectedWebsites';

    public function __construct() {}

    public static function fromArray(array $array): GetConnectedWebsites
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
