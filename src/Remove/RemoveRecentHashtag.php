<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Remove;

use Totaldev\TgSchema\TdFunction;

/**
 * Removes a hashtag from the list of recently used hashtags.
 */
class RemoveRecentHashtag extends TdFunction
{
    public const string TYPE_NAME = 'removeRecentHashtag';

    public function __construct(
        /**
         * Hashtag to delete.
         */
        protected string $hashtag
    ) {}

    public static function fromArray(array $array): RemoveRecentHashtag
    {
        return new static(
            hashtag: $array['hashtag'],
        );
    }

    public function getHashtag(): string
    {
        return $this->hashtag;
    }

    public function setHashtag(string $value): static
    {
        $this->hashtag = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'hashtag' => $this->hashtag,
        ];
    }
}
