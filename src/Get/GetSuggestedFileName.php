<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns suggested name for saving a file in a given directory.
 */
class GetSuggestedFileName extends TdFunction
{
    public const TYPE_NAME = 'getSuggestedFileName';

    public function __construct(
        /**
         * Identifier of the file.
         */
        protected int    $fileId,
        /**
         * Directory in which the file is expected to be saved.
         */
        protected string $directory
    ) {}

    public static function fromArray(array $array): GetSuggestedFileName
    {
        return new static(
            $array['file_id'],
            $array['directory'],
        );
    }

    public function getDirectory(): string
    {
        return $this->directory;
    }

    public function getFileId(): int
    {
        return $this->fileId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'file_id'   => $this->fileId,
            'directory' => $this->directory,
        ];
    }
}
