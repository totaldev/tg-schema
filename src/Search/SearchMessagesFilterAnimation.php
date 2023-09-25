<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns only animation messages
 */
class SearchMessagesFilterAnimation extends SearchMessagesFilter
{
    public const TYPE_NAME = 'searchMessagesFilterAnimation';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SearchMessagesFilterAnimation
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
