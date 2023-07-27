<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns recommended chat folders for the current user
 */
class GetRecommendedChatFolders extends TdFunction
{
    public const TYPE_NAME = 'getRecommendedChatFolders';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetRecommendedChatFolders
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}