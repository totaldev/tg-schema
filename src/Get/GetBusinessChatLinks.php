<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns business chat links created for the current account.
 */
class GetBusinessChatLinks extends TdFunction
{
    public const TYPE_NAME = 'getBusinessChatLinks';

    public function __construct() {}

    public static function fromArray(array $array): GetBusinessChatLinks
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
