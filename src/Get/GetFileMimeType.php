<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the MIME type of a file, guessed by its extension. Returns an empty string on failure. Can be called synchronously.
 */
class GetFileMimeType extends TdFunction
{
    public const TYPE_NAME = 'getFileMimeType';

    public function __construct(
        /**
         * The name of the file or path to the file.
         */
        protected string $fileName
    ) {}

    public static function fromArray(array $array): GetFileMimeType
    {
        return new static(
            $array['file_name'],
        );
    }

    public function getFileName(): string
    {
        return $this->fileName;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'file_name' => $this->fileName,
        ];
    }
}
