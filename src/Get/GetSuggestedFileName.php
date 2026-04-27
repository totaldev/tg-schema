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
    public const string TYPE_NAME = 'getSuggestedFileName';

    public function __construct(
        /**
         * Directory in which the file is expected to be saved.
         */
        protected string $directory,
        /**
         * Identifier of the file.
         */
        protected int    $fileId,
    ) {}

    public static function fromArray(array $array): GetSuggestedFileName
    {
        return new static(
            directory: $array['directory'],
            fileId   : $array['file_id'],
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

    public function setDirectory(string $value): static
    {
        $this->directory = $value;

        return $this;
    }

    public function setFileId(int $value): static
    {
        $this->fileId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'directory' => $this->directory,
            'file_id'   => $this->fileId,
        ];
    }
}
