<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Remove;

use Totaldev\TgSchema\TdFunction;

/**
 * Removes a hashtag or a cashtag from the list of recently searched for hashtags or cashtags.
 */
class RemoveSearchedForTag extends TdFunction
{
    public const TYPE_NAME = 'removeSearchedForTag';

    public function __construct(
        /**
         * Hashtag or cashtag to delete.
         */
        protected string $tag
    ) {}

    public static function fromArray(array $array): RemoveSearchedForTag
    {
        return new static(
            $array['tag'],
        );
    }

    public function getTag(): string
    {
        return $this->tag;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'tag'   => $this->tag,
        ];
    }
}
