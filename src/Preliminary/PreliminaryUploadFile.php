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
 * Preliminary uploads a file to the cloud before sending it in a message, which can be useful for uploading of being recorded voice and video notes. In all
 * other cases there is no need to preliminary upload a file. Updates updateFile will be used to notify about upload progress. The upload will not be completed
 * until the file is sent in a message.
 */
class PreliminaryUploadFile extends TdFunction
{
    public const TYPE_NAME = 'preliminaryUploadFile';

    public function __construct(
        /**
         * File to upload.
         */
        protected InputFile $file,
        /**
         * File type; pass null if unknown.
         */
        protected FileType  $fileType,
        /**
         * Priority of the upload (1-32). The higher the priority, the earlier the file will be uploaded. If the priorities of two files are equal, then the first one for which preliminaryUploadFile was called will be uploaded first.
         */
        protected int       $priority,
    ) {}

    public static function fromArray(array $array): PreliminaryUploadFile
    {
        return new static(
            TdSchemaRegistry::fromArray($array['file']),
            TdSchemaRegistry::fromArray($array['file_type']),
            $array['priority'],
        );
    }

    public function getFile(): InputFile
    {
        return $this->file;
    }

    public function getFileType(): FileType
    {
        return $this->fileType;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'file'      => $this->file->typeSerialize(),
            'file_type' => $this->fileType->typeSerialize(),
            'priority'  => $this->priority,
        ];
    }
}
