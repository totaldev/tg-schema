<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns only video note messages
 */
class SearchMessagesFilterVideoNote extends SearchMessagesFilter
{
    public const TYPE_NAME = 'searchMessagesFilterVideoNote';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SearchMessagesFilterVideoNote
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
