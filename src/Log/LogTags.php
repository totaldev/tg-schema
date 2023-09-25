<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Log;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of available TDLib internal log tags
 */
class LogTags extends TdObject
{
    public const TYPE_NAME = 'logTags';

    /**
     * List of log tags
     *
     * @var string[]
     */
    protected array $tags;

    public function __construct(array $tags)
    {
        $this->tags = $tags;
    }

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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'tags' => $this->tags,
        ];
    }
}
