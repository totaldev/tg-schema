<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

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
