<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Document\Document;
use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A document message (general file).
 */
class MessageDocument extends MessageContent
{
    public const TYPE_NAME = 'messageDocument';

    public function __construct(
        /**
         * The document description.
         */
        protected Document      $document,
        /**
         * Document caption.
         */
        protected FormattedText $caption
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageDocument
    {
        return new static(
            TdSchemaRegistry::fromArray($array['document']),
            TdSchemaRegistry::fromArray($array['caption']),
        );
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
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
            'caption'  => $this->caption->typeSerialize(),
        ];
    }
}
