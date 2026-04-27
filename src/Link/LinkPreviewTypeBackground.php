<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\Background\BackgroundType;
use Totaldev\TgSchema\Document\Document;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to a background. Link preview title and description are available only for filled backgrounds.
 */
class LinkPreviewTypeBackground extends LinkPreviewType
{
    public const string TYPE_NAME = 'linkPreviewTypeBackground';

    public function __construct(
        /**
         * Type of the background; may be null if unknown.
         */
        protected ?BackgroundType $backgroundType,
        /**
         * Document with the background; may be null for filled backgrounds.
         */
        protected ?Document       $document,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeBackground
    {
        return new static(
            backgroundType: (isset($array['background_type']) ? TdSchemaRegistry::fromArray($array['background_type']) : null),
            document      : (isset($array['document']) ? TdSchemaRegistry::fromArray($array['document']) : null),
        );
    }

    public function getBackgroundType(): ?BackgroundType
    {
        return $this->backgroundType;
    }

    public function getDocument(): ?Document
    {
        return $this->document;
    }

    public function setBackgroundType(?BackgroundType $value): static
    {
        $this->backgroundType = $value;

        return $this;
    }

    public function setDocument(?Document $value): static
    {
        $this->document = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'background_type' => (null !== $this->backgroundType ? $this->backgroundType->jsonSerialize() : null),
            'document'        => (null !== $this->document ? $this->document->jsonSerialize() : null),
        ];
    }
}
