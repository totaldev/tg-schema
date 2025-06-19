<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Rich;

use Totaldev\TgSchema\Document\Document;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A small image inside the text.
 */
class RichTextIcon extends RichText
{
    public const TYPE_NAME = 'richTextIcon';

    public function __construct(
        /**
         * The image represented as a document. The image can be in GIF, JPEG or PNG format.
         */
        protected Document $document,
        /**
         * Width of a bounding box in which the image must be shown; 0 if unknown.
         */
        protected int      $width,
        /**
         * Height of a bounding box in which the image must be shown; 0 if unknown.
         */
        protected int      $height
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): RichTextIcon
    {
        return new static(
            TdSchemaRegistry::fromArray($array['document']),
            $array['width'],
            $array['height'],
        );
    }

    public function getDocument(): Document
    {
        return $this->document;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'document' => $this->document->typeSerialize(),
            'width'    => $this->width,
            'height'   => $this->height,
        ];
    }
}
