<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Hashtags;

use Totaldev\TgSchema\TdObject;

/**
 * Contains a list of hashtags.
 */
class Hashtags extends TdObject
{
    public const TYPE_NAME = 'hashtags';

    public function __construct(
        /**
         * A list of hashtags.
         *
         * @var string[]
         */
        protected array $hashtags
    ) {}

    public static function fromArray(array $array): Hashtags
    {
        return new static(
            $array['hashtags'],
        );
    }

    public function getHashtags(): array
    {
        return $this->hashtags;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'hashtags' => $this->hashtags,
        ];
    }
}
