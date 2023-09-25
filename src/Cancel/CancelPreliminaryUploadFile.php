<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Cancel;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Stops the preliminary uploading of a file. Supported only for files uploaded by using preliminaryUploadFile. For other files the behavior is undefined
 */
class CancelPreliminaryUploadFile extends TdFunction
{
    public const TYPE_NAME = 'cancelPreliminaryUploadFile';

    /**
     * Identifier of the file to stop uploading
     *
     * @var int
     */
    protected int $fileId;

    public function __construct(int $fileId)
    {
        $this->fileId = $fileId;
    }

    public static function fromArray(array $array): CancelPreliminaryUploadFile
    {
        return new static(
            $array['file_id'],
        );
    }

    public function getFileId(): int
    {
        return $this->fileId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'file_id' => $this->fileId,
        ];
    }
}
