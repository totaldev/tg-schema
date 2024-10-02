<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passport;

/**
 * The file contains an error. The error will be considered resolved when the file changes.
 */
class PassportElementErrorSourceFile extends PassportElementErrorSource
{
    public const TYPE_NAME = 'passportElementErrorSourceFile';

    public function __construct(
        /**
         * Index of a file with the error.
         */
        protected int $fileIndex
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PassportElementErrorSourceFile
    {
        return new static(
            $array['file_index'],
        );
    }

    public function getFileIndex(): int
    {
        return $this->fileIndex;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'file_index' => $this->fileIndex,
        ];
    }
}
