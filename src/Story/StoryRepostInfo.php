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
    public const string TYPE_NAME = 'storyRepostInfo';

    public function __construct(
        /**
         * True, if story content was modified during reposting; otherwise, story wasn't modified.
         */
        protected bool        $isContentModified,
        /**
         * Origin of the story that was reposted.
         */
        protected StoryOrigin $origin,
    ) {}

    public static function fromArray(array $array): StoryRepostInfo
    {
        return new static(
            isContentModified: $array['is_content_modified'],
            origin           : TdSchemaRegistry::fromArray($array['origin']),
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

    public function setIsContentModified(bool $value): static
    {
        $this->isContentModified = $value;

        return $this;
    }

    public function setOrigin(StoryOrigin $value): static
    {
        $this->origin = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'is_content_modified' => $this->isContentModified,
            'origin'              => $this->origin->jsonSerialize(),
        ];
    }
}
