<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\Document\Document;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to a general file.
 */
class LinkPreviewTypeDocument extends LinkPreviewType
{
    public const TYPE_NAME = 'linkPreviewTypeDocument';

    public function __construct(
        /**
         * The document description.
         */
        protected Document $document
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeDocument
    {
        return new static(
            TdSchemaRegistry::fromArray($array['document']),
        );
    }

    public function getDocument(): Document
    {
        return $this->document;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'document' => $this->document->typeSerialize(),
        ];
    }
}
