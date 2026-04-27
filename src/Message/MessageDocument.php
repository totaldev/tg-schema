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
    public const string TYPE_NAME = 'messageDocument';

    public function __construct(
        /**
         * Document caption.
         */
        protected FormattedText $caption,
        /**
         * The document description.
         */
        protected Document      $document,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageDocument
    {
        return new static(
            caption : TdSchemaRegistry::fromArray($array['caption']),
            document: TdSchemaRegistry::fromArray($array['document']),
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

    public function setCaption(FormattedText $value): static
    {
        $this->caption = $value;

        return $this;
    }

    public function setDocument(Document $value): static
    {
        $this->document = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'caption'  => $this->caption->jsonSerialize(),
            'document' => $this->document->jsonSerialize(),
        ];
    }
}
