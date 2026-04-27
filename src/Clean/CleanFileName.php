<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Clean;

use Totaldev\TgSchema\TdFunction;

/**
 * Removes potentially dangerous characters from the name of a file. Returns an empty string on failure. Can be called synchronously.
 */
class CleanFileName extends TdFunction
{
    public const string TYPE_NAME = 'cleanFileName';

    public function __construct(
        /**
         * File name or path to the file.
         */
        protected string $fileName
    ) {}

    public static function fromArray(array $array): CleanFileName
    {
        return new static(
            fileName: $array['file_name'],
        );
    }

    public function getFileName(): string
    {
        return $this->fileName;
    }

    public function setFileName(string $value): static
    {
        $this->fileName = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'file_name' => $this->fileName,
        ];
    }
}
