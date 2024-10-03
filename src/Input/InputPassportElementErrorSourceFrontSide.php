<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * The front side of the document contains an error. The error is considered resolved when the file with the front side of the document changes.
 */
class InputPassportElementErrorSourceFrontSide extends InputPassportElementErrorSource
{
    public const TYPE_NAME = 'inputPassportElementErrorSourceFrontSide';

    public function __construct(
        /**
         * Current hash of the file containing the front side.
         */
        protected string $fileHash
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputPassportElementErrorSourceFrontSide
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
