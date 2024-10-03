<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * The file contains an error. The error is considered resolved when the file changes.
 */
class InputPassportElementErrorSourceFile extends InputPassportElementErrorSource
{
    public const TYPE_NAME = 'inputPassportElementErrorSourceFile';

    public function __construct(
        /**
         * Current hash of the file which has the error.
         */
        protected string $fileHash
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputPassportElementErrorSourceFile
    {
        return new static(
            $array['file_hash'],
        );
    }

    public function getFileHash(): string
    {
        return $this->fileHash;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'file_hash' => $this->fileHash,
        ];
    }
}
