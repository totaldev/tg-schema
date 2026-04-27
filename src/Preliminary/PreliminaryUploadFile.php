<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Preliminary;

use Totaldev\TgSchema\File\FileType;
use Totaldev\TgSchema\Input\InputFile;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Preliminarily uploads a file to the cloud before sending it in a message, which can be useful for uploading of being recorded voice and video notes. In all
 * other cases there is no need to preliminary upload a file. Updates updateFile will be used to notify about upload progress. The upload will not be completed
 * until the file is sent in a message.
 */
class PreliminaryUploadFile extends TdFunction
{
    public const string TYPE_NAME = 'preliminaryUploadFile';

    public function __construct(
        /**
         * File to upload.
         */
        protected InputFile $file,
        /**
         * Priority of the upload (1-32). The higher the priority, the earlier the file will be uploaded. If the priorities of two files are equal, then the first one for which preliminaryUploadFile was called will be uploaded first.
         */
        protected int       $priority,
        /**
         * File type; pass null if unknown.
         */
        protected ?FileType $fileType = null,
    ) {}

    public static function fromArray(array $array): PreliminaryUploadFile
    {
        return new static(
            file    : TdSchemaRegistry::fromArray($array['file']),
            fileType: (isset($array['file_type']) ? TdSchemaRegistry::fromArray($array['file_type']) : null),
            priority: $array['priority'],
        );
    }

    public function getFile(): InputFile
    {
        return $this->file;
    }

    public function getFileType(): ?FileType
    {
        return $this->fileType;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function setFile(InputFile $value): static
    {
        $this->file = $value;

        return $this;
    }

    public function setFileType(?FileType $value): static
    {
        $this->fileType = $value;

        return $this;
    }

    public function setPriority(int $value): static
    {
        $this->priority = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'file'      => $this->file->jsonSerialize(),
            'file_type' => (null !== $this->fileType ? $this->fileType->jsonSerialize() : null),
            'priority'  => $this->priority,
        ];
    }
}
