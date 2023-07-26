<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * A category containing frequently used basic groups and supergroups
 */
class TopChatCategoryGroups extends TopChatCategory
{
    public const TYPE_NAME = 'topChatCategoryGroups';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): TopChatCategoryGroups
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
