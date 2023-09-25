<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Document\Document;
use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A document message (general file)
 */
class MessageDocument extends MessageContent
{
    public const TYPE_NAME = 'messageDocument';

    /**
     * Document caption
     *
     * @var FormattedText
     */
    protected FormattedText $caption;

    /**
     * The document description
     *
     * @var Document
     */
    protected Document $document;

    public function __construct(Document $document, FormattedText $caption)
    {
        parent::__construct();

        $this->document = $document;
        $this->caption = $caption;
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
            '@type' => static::TYPE_NAME,
            'document' => $this->document->typeSerialize(),
            'caption' => $this->caption->typeSerialize(),
        ];
    }
}
