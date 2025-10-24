<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Log;

use Totaldev\TgSchema\TdObject;

/**
 * Contains a list of available TDLib internal log tags.
 */
class LogTags extends TdObject
{
    public const string TYPE_NAME = 'logTags';

    public function __construct(
        /**
         * List of log tags.
         *
         * @var string[]
         */
        protected array $tags
    ) {}

    public static function fromArray(array $array): LogTags
    {
        return new static(
            $array['tags'],
        );
    }

    public function getTags(): array
    {
        return $this->tags;
    }

    public function setTags(array $value): static
    {
        $this->tags = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'tags'  => $this->tags,
        ];
    }
}
