<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Document;

use Totaldev\TgSchema\File\File;
use Totaldev\TgSchema\Minithumbnail\Minithumbnail;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Thumbnail\Thumbnail;

/**
 * Describes a document of any type.
 */
class Document extends TdObject
{
    public const string TYPE_NAME = 'document';

    public function __construct(
        /**
         * File containing the document.
         */
        protected File           $document,
        /**
         * Original name of the file; as defined by the sender.
         */
        protected string         $fileName,
        /**
         * MIME type of the file; as defined by the sender.
         */
        protected string         $mimeType,
        /**
         * Document minithumbnail; may be null.
         */
        protected ?Minithumbnail $minithumbnail,
        /**
         * Document thumbnail in JPEG or PNG format (PNG will be used only for background patterns); as defined by the sender; may be null.
         */
        protected ?Thumbnail     $thumbnail,
    ) {}

    public static function fromArray(array $array): Document
    {
        return new static(
            document     : TdSchemaRegistry::fromArray($array['document']),
            fileName     : $array['file_name'],
            mimeType     : $array['mime_type'],
            minithumbnail: (isset($array['minithumbnail']) ? TdSchemaRegistry::fromArray($array['minithumbnail']) : null),
            thumbnail    : (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
        );
    }

    public function getDocument(): File
    {
        return $this->document;
    }

    public function getFileName(): string
    {
        return $this->fileName;
    }

    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    public function getMinithumbnail(): ?Minithumbnail
    {
        return $this->minithumbnail;
    }

    public function getThumbnail(): ?Thumbnail
    {
        return $this->thumbnail;
    }

    public function setDocument(File $value): static
    {
        $this->document = $value;

        return $this;
    }

    public function setFileName(string $value): static
    {
        $this->fileName = $value;

        return $this;
    }

    public function setMimeType(string $value): static
    {
        $this->mimeType = $value;

        return $this;
    }

    public function setMinithumbnail(?Minithumbnail $value): static
    {
        $this->minithumbnail = $value;

        return $this;
    }

    public function setThumbnail(?Thumbnail $value): static
    {
        $this->thumbnail = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'document'      => $this->document->jsonSerialize(),
            'file_name'     => $this->fileName,
            'mime_type'     => $this->mimeType,
            'minithumbnail' => (null !== $this->minithumbnail ? $this->minithumbnail->jsonSerialize() : null),
            'thumbnail'     => (null !== $this->thumbnail ? $this->thumbnail->jsonSerialize() : null),
        ];
    }
}
