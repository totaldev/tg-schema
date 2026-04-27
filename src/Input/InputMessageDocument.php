<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A document message (general file).
 */
class InputMessageDocument extends InputMessageContent
{
    public const string TYPE_NAME = 'inputMessageDocument';

    public function __construct(
        /**
         * Pass true to disable automatic file type detection and send the document as a file. Always true for files sent to secret chats.
         */
        protected bool            $disableContentTypeDetection,
        /**
         * Document to be sent.
         */
        protected InputFile       $document,
        /**
         * Document caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters.
         */
        protected ?FormattedText  $caption = null,
        /**
         * Document thumbnail; pass null to skip thumbnail uploading.
         */
        protected ?InputThumbnail $thumbnail = null,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessageDocument
    {
        return new static(
            caption                    : (isset($array['caption']) ? TdSchemaRegistry::fromArray($array['caption']) : null),
            disableContentTypeDetection: $array['disable_content_type_detection'],
            document                   : TdSchemaRegistry::fromArray($array['document']),
            thumbnail                  : (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
        );
    }

    public function getCaption(): ?FormattedText
    {
        return $this->caption;
    }

    public function getDisableContentTypeDetection(): bool
    {
        return $this->disableContentTypeDetection;
    }

    public function getDocument(): InputFile
    {
        return $this->document;
    }

    public function getThumbnail(): ?InputThumbnail
    {
        return $this->thumbnail;
    }

    public function setCaption(?FormattedText $value): static
    {
        $this->caption = $value;

        return $this;
    }

    public function setDisableContentTypeDetection(bool $value): static
    {
        $this->disableContentTypeDetection = $value;

        return $this;
    }

    public function setDocument(InputFile $value): static
    {
        $this->document = $value;

        return $this;
    }

    public function setThumbnail(?InputThumbnail $value): static
    {
        $this->thumbnail = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                          => static::TYPE_NAME,
            'caption'                        => (null !== $this->caption ? $this->caption->jsonSerialize() : null),
            'disable_content_type_detection' => $this->disableContentTypeDetection,
            'document'                       => $this->document->jsonSerialize(),
            'thumbnail'                      => (null !== $this->thumbnail ? $this->thumbnail->jsonSerialize() : null),
        ];
    }
}
