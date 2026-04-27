<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Cancel;

use Totaldev\TgSchema\TdFunction;

/**
 * Stops the preliminary uploading of a file. Supported only for files uploaded by using preliminaryUploadFile.
 */
class CancelPreliminaryUploadFile extends TdFunction
{
    public const string TYPE_NAME = 'cancelPreliminaryUploadFile';

    public function __construct(
        /**
         * Identifier of the file to stop uploading.
         */
        protected int $fileId
    ) {}

    public static function fromArray(array $array): CancelPreliminaryUploadFile
    {
        return new static(
            fileId: $array['file_id'],
        );
    }

    public function getFileId(): int
    {
        return $this->fileId;
    }

    public function setFileId(int $value): static
    {
        $this->fileId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'file_id' => $this->fileId,
        ];
    }
}
