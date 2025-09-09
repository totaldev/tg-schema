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
    public const TYPE_NAME = 'inputMessageDocument';

    public function __construct(
        /**
         * Document to be sent.
         */
        protected InputFile       $document,
        /**
         * Pass true to disable automatic file type detection and send the document as a file. Always true for files sent to secret chats.
         */
        protected bool            $disableContentTypeDetection,
        /**
         * Document thumbnail; pass null to skip thumbnail uploading.
         */
        protected ?InputThumbnail $thumbnail = null,
        /**
         * Document caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters.
         */
        protected ?FormattedText  $caption = null,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessageDocument
    {
        return new static(
            TdSchemaRegistry::fromArray($array['document']),
            isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null,
            $array['disable_content_type_detection'],
            isset($array['caption']) ? TdSchemaRegistry::fromArray($array['caption']) : null,
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

    public function typeSerialize(): array
    {
        return [
            '@type'                          => static::TYPE_NAME,
            'document'                       => $this->document->typeSerialize(),
            'thumbnail'                      => $this->thumbnail ?? null,
            'disable_content_type_detection' => $this->disableContentTypeDetection,
            'caption'                        => $this->caption ?? null,
        ];
    }
}
