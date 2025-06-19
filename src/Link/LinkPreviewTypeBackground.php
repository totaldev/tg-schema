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
    public const TYPE_NAME = 'linkPreviewTypeBackground';

    public function __construct(
        /**
         * Document with the background; may be null for filled backgrounds.
         */
        protected ?Document       $document,
        /**
         * Type of the background; may be null if unknown.
         */
        protected ?BackgroundType $backgroundType
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeBackground
    {
        return new static(
            isset($array['document']) ? TdSchemaRegistry::fromArray($array['document']) : null,
            isset($array['background_type']) ? TdSchemaRegistry::fromArray($array['background_type']) : null,
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

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'document'        => (isset($this->document) ? $this->document : null),
            'background_type' => (isset($this->backgroundType) ? $this->backgroundType : null),
        ];
    }
}
