<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdObject;

/**
 * Represents a filter for type of the chats in which to search messages.
 */
class SearchMessagesChatTypeFilter extends TdObject
{
    public const TYPE_NAME = 'SearchMessagesChatTypeFilter';

    public function __construct() {}

    public static function fromArray(array $array): SearchMessagesChatTypeFilter
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
