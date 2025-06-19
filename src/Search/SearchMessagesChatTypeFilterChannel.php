<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

/**
 * Returns only messages in channel chats.
 */
class SearchMessagesChatTypeFilterChannel extends SearchMessagesChatTypeFilter
{
    public const TYPE_NAME = 'searchMessagesChatTypeFilterChannel';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SearchMessagesChatTypeFilterChannel
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
