<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about original story that was reposted.
 */
class StoryRepostInfo extends TdObject
{
    public const TYPE_NAME = 'storyRepostInfo';

    public function __construct(
        /**
         * Origin of the story that was reposted.
         */
        protected StoryOrigin $origin,
        /**
         * True, if story content was modified during reposting; otherwise, story wasn't modified.
         */
        protected bool        $isContentModified
    ) {}

    public static function fromArray(array $array): StoryRepostInfo
    {
        return new static(
            TdSchemaRegistry::fromArray($array['origin']),
            $array['is_content_modified'],
        );
    }

    public function getIsContentModified(): bool
    {
        return $this->isContentModified;
    }

    public function getOrigin(): StoryOrigin
    {
        return $this->origin;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'origin'              => $this->origin->typeSerialize(),
            'is_content_modified' => $this->isContentModified,
        ];
    }
}
