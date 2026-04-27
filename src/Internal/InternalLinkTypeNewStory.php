<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

use Totaldev\TgSchema\Story\StoryContentType;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to open the story posting interface.
 */
class InternalLinkTypeNewStory extends InternalLinkType
{
    public const string TYPE_NAME = 'internalLinkTypeNewStory';

    public function __construct(
        /**
         * The type of the content of the story to post; may be null if unspecified.
         */
        protected ?StoryContentType $contentType
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeNewStory
    {
        return new static(
            contentType: (isset($array['content_type']) ? TdSchemaRegistry::fromArray($array['content_type']) : null),
        );
    }

    public function getContentType(): ?StoryContentType
    {
        return $this->contentType;
    }

    public function setContentType(?StoryContentType $value): static
    {
        $this->contentType = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'content_type' => (null !== $this->contentType ? $this->contentType->jsonSerialize() : null),
        ];
    }
}
